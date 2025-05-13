<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Avis;
use App\Models\CircuitEvent;
use App\Models\Favori;
use App\Models\Offer;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reservations = Reservation::where('user_id', Auth::id())->with('circuitEvent')->latest()->get();
        $favorisSites = Favori::where('user_id', Auth::id())->where('type', 'site')->with('circuitEvent')->get();
        $favorisEvents = Favori::where('user_id', Auth::id())->where('type', 'event')->with('circuitEvent')->get();
        $points = Auth::user()->points ?? 250; // Exemple
        $recommendedSites = CircuitEvent::where('type', 'site')->inRandomOrder()->take(3)->get();
        $upcomingEvents = CircuitEvent::where('type', 'event')->where('date', '>=', now())->take(3)->get();

        return view('user.dashboard', compact('reservations', 'favorisSites', 'favorisEvents', 'points', 'recommendedSites', 'upcomingEvents'));
    }

    public function reservations()
    {
        $reservations = Reservation::where('user_id', Auth::id())->with('circuitEvent')->latest()->get();
        return view('user.reservations', compact('reservations'));
    }

    public function cancelReservation(Reservation $reservation)
    {
        if ($reservation->user_id !== Auth::id() || $reservation->status !== 'en attente') {
            abort(403);
        }

        $reservation->update(['status' => 'annulée']);
        return redirect()->route('user.reservations')->with('success', 'Réservation annulée.');
    }

    public function offresSpeciales()
    {
        $offres = Offer::with('circuitEvent')->get();
        return view('user.offres-speciales', compact('offres'));
    }

    public function reserverIndex()
    {
        $circuits = CircuitEvent::all();
        return view('user.reserver-index', compact('circuits'));
    }

    public function reserver($circuitEventId)
    {
        $circuitEvent = CircuitEvent::findOrFail($circuitEventId);
        return view('user.reserver', compact('circuitEvent'));
    }

    public function storeReservation(Request $request, $circuitEventId)
    {
        $request->validate([
            'date' => 'required|date',
            'participants' => 'required|integer|min:1',
        ]);

        $circuitEvent = CircuitEvent::findOrFail($circuitEventId);

        $reservation = Reservation::create([
            'user_id' => Auth::id(),
            'circuit_event_id' => $circuitEvent->id,
            'status' => 'en attente',
            'date' => $request->date,
            'participants' => $request->participants,
        ]);

        Notification::send(Auth::user(), new \App\Notifications\ReservationCreated($reservation));

        return redirect()->route('user.reservations')->with('success', 'Réservation créée. Procédez au paiement.');
    }

    public function paiement()
    {
        $reservations = Reservation::where('user_id', Auth::id())->where('status', 'en attente')->with('circuitEvent')->get();
        return view('user.paiement', compact('reservations'));
    }

    public function storePaiement(Request $request)
    {
        $request->validate([
            'circuit_event_id' => 'required|exists:circuit_events,id',
            'payment_method' => 'required|in:mtn,moov,card',
            'phone' => 'required_if:payment_method,mtn,moov|string',
            'amount' => 'required|numeric|min:0',
        ]);

        $reservation = Reservation::where('user_id', Auth::id())
            ->where('circuit_event_id', $request->circuit_event_id)
            ->where('status', 'en attente')
            ->firstOrFail();

        $reservation->update(['status' => 'confirmée']);

        Notification::send(Auth::user(), new \App\Notifications\PaymentConfirmed($reservation));

        return redirect()->route('user.reservations')->with('success', 'Paiement effectué avec succès.');
    }

    public function favoris()
    {
        $favorisSites = Favori::where('user_id', Auth::id())->where('type', 'site')->with('circuitEvent')->get();
        $favorisEvents = Favori::where('user_id', Auth::id())->where('type', 'event')->with('circuitEvent')->get();
        return view('user.favoris', compact('favorisSites', 'favorisEvents'));
    }

    public function addFavori(Request $request, $circuitEventId)
    {
        $circuitEvent = CircuitEvent::findOrFail($circuitEventId);
        Favori::firstOrCreate([
            'user_id' => Auth::id(),
            'circuit_event_id' => $circuitEventId,
            'type' => $circuitEvent->type,
        ]);
        return redirect()->back()->with('success', 'Ajouté aux favoris.');
    }

    public function removeFavori($circuitEventId)
    {
        $favori = Favori::where('user_id', Auth::id())->where('circuit_event_id', $circuitEventId)->firstOrFail();
        $favori->delete();
        return redirect()->route('user.favoris')->with('success', 'Retiré des favoris.');
    }

    public function points()
    {
        $points = Auth::user()->points ?? 250; // Exemple
        return view('user.points', compact('points'));
    }

    public function profil()
    {
        return view('user.profil');
    }

    public function updateProfil(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|string|max:20',
        ]);

        Auth::user()->update($request->only('name', 'email', 'phone'));
        return redirect()->route('user.profil')->with('success', 'Profil mis à jour.');
    }

    public function avis()
    {
        $avis = Avis::where('user_id', Auth::id())->latest()->get();
        return view('user.avis', compact('avis'));
    }

    public function storeAvis(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Avis::create([
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return redirect()->route('user.avis')->with('success', 'Avis soumis avec succès.');
    }

    public function markNotificationAsRead($notificationId)
    {
        $notification = Auth::user()->notifications()->findOrFail($notificationId);
        $notification->markAsRead();
        return redirect()->back()->with('success', 'Notification marquée comme lue.');
    }
}