<?php

namespace App\Http\Controllers;

use App\Models\CancellationPolicy;
use App\Notifications\ReservationConfirmed;
use Illuminate\Support\Facades\Notification;
use Carbon\Carbon;
use App\Models\Event;
use App\Models\Offer;
use App\Models\Reservation;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::with('provider')->take(2)->get();
        $sites = Site::with('provider')->take(3)->get();
        $offers = Offer::with('provider')->take(2)->get();
        return view('user.dashboard', compact('events', 'sites', 'offers'));
    }

    public function destinations() { return view('user.destinations'); }
    public function planification() { return view('user.planification'); }
    public function avis() { return view('user.avis'); }
    public function evenements() { return view('user.evenements'); }

    public function reservations()
    {
        $reservations = Reservation::where('user_id', auth()->id())
            ->with(['provider', 'type' => function ($query) {
                $query->whereIn('type', ['site', 'evenement']);
            }])
            ->get();
        $policies = CancellationPolicy::orderBy('days_before', 'desc')->get();
        return view('user.reservations', compact('reservations', 'policies'));
    }

    public function cancelReservation(Request $request, $id)
    {
        $reservation = Reservation::where('user_id', auth()->id())->findOrFail($id);
        $policies = CancellationPolicy::orderBy('days_before', 'desc')->get();
        $daysUntilStart = Carbon::now()->diffInDays(Carbon::parse($reservation->start_date), false);

        if ($reservation->status !== 'paid') {
            $reservation->delete();
            return redirect()->route('reservations')->with('success', 'Réservation annulée avec succès.');
        }

        $refundPercentage = 0;
        foreach ($policies as $policy) {
            if ($daysUntilStart >= $policy->days_before) {
                $refundPercentage = $policy->refund_percentage;
                break;
            }
        }

        if ($refundPercentage == 0) {
            return redirect()->route('reservations')->with('error', 'Annulation impossible : la période d\'annulation est dépassée.');
        }

        $reservation->update([
            'status' => 'cancelled',
            'refund_amount' => ($refundPercentage / 100) * $reservation->amount,
        ]);

        return redirect()->route('reservations')->with('success', 'Réservation annulée. Remboursement de ' . $refundPercentage . '% (' . number_format($reservation->refund_amount, 0, ',', ' ') . ' FCFA).');
    }

    public function offres() { return view('user.offres'); }
    public function profil() { return view('user.profil'); }

    public function reserver(Request $request)
    {
        $sites = Site::all();
        $events = Event::all();
        $type = $request->query('type');
        $item = $request->query('item');
        return view('user.reserver', compact('sites', 'events', 'type', 'item'));
    }

    public function storeReserver(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:site,evenement',
            'item_id' => 'required|exists:'.($request->type === 'site' ? 'sites' : 'events').',id',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'participants' => 'required|integer|min:1',
            'visit_type' => 'nullable|in:guidée,libre',
            'ticket_type' => 'nullable|in:standard,vip',
            'comments' => 'nullable|string',
        ]);

        $item = $request->type === 'site' ? Site::find($validated['item_id']) : Event::find($validated['item_id']);
        $amount = $item->price * $validated['participants'];

        $reservation = Reservation::create([
            'user_id' => auth()->id(),
            'provider_id' => $item->provider_id,
            'type' => $validated['type'],
            'item_id' => $validated['item_id'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'participants' => $validated['participants'],
            'visit_type' => $validated['visit_type'],
            'ticket_type' => $validated['ticket_type'],
            'comments' => $validated['comments'],
            'amount' => $amount,
            'status' => 'pending',
        ]);

        if ($amount == 0) {
            return redirect()->route('reservations')->with('success', 'Réservation gratuite confirmée pour ' . $item->name . ' !');
        }

        return redirect()->route('paiement')->with('reservation', $reservation);
    }

    public function paiement()
    {
        $reservation = session('reservation');
        if (!$reservation) {
            return redirect()->route('reserver')->with('error', 'Aucune réservation en cours.');
        }
        $item = $reservation->type === 'site' ? Site::find($reservation->item_id) : Event::find($reservation->item_id);
        return view('user.paiement', compact('reservation', 'item'));
    }

    public function storePaiement(Request $request)
    {
        $validated = $request->validate([
            'payment_method' => 'required|in:card,mobile_money,paypal',
        ]);

        $reservation = session('reservation');
        $reservation = Reservation::find($reservation->id);
        $reservation->update(['status' => 'paid']);

        Notification::send(auth()->user(), new ReservationConfirmed($reservation));

        return redirect()->route('reservations')->with('success', 'Paiement effectué avec succès. Un e-mail de confirmation vous a été envoyé.');
    }
}