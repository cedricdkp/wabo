<?php

namespace App\Http\Controllers;

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
        return view('user.dashboard');
    }
    public function destinations() { return view('user.destinations'); }
    public function planification() { return view('user.planification'); }
    public function avis() { return view('user.avis'); }
    public function evenements() { return view('user.evenements'); }
    public function reservations() { return view('user.reservations'); }
    public function offres() { return view('user.offres'); }
    public function profil() { return view('user.profil'); }
    public function reserver() { return view('user.reserver'); }

    public function storeReserver(Request $request) {
        $validated = $request->validate([
            'type' => 'required|in:site,evenement',
            'item' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'participants' => 'required|integer|min:1',
            'comments' => 'nullable|string',
        ]);

        // Logique fictive pour déterminer si c'est gratuit ou payant
        $pricing = [
            'site' => [
                'Ganvié' => 50000,
                'Porto-Novo' => 30000,
                'Ouidah' => 40000,
            ],
            'evenement' => [
                'Festival Vaudou' => 20000,
                'Fête de Porto-Novo' => 0,
            ],
        ];

        $amount = $pricing[$validated['type']][$validated['item']];

        // Simuler l'enregistrement de la réservation
        $reservation = [
            'type' => $validated['type'],
            'item' => $validated['item'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'participants' => $validated['participants'],
            'comments' => $validated['comments'],
            'amount' => $amount,
        ];

        if ($amount == 0) {
            // Réservation gratuite : confirmer directement
            return redirect()->route('reservations')->with('success', 'Réservation gratuite confirmée pour ' . $validated['item'] . ' !');
        }

        // Réservation payante : passer à la page de paiement
        return redirect()->route('paiement')->with('reservation', $reservation);
    }

    public function paiement() {
        $reservation = session('reservation');
        if (!$reservation) {
            return redirect()->route('reserver')->with('error', 'Aucune réservation en cours.');
        }
        return view('user.paiement', compact('reservation'));
    }

    public function storePaiement(Request $request) {
        $validated = $request->validate([
            'payment_method' => 'required|in:card,mobile_money,paypal',
        ]);

        // Logique fictive pour traiter le paiement
        // À remplacer par une intégration réelle (Stripe, Paystack, etc.)
        return redirect()->route('reservations')->with('success', 'Paiement effectué avec succès pour votre réservation !');
    }
}