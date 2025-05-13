@extends('layouts.app')

@section('content')
    <div class="px-4 py-6 sm:px-0">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Paiement de Votre Réservation</h2>
            <p class="text-gray-600 mb-6">Sélectionnez un moyen de paiement pour finaliser votre réservation.</p>
            <div class="bg-green-50 p-4 rounded-md">
                <!-- Récapitulatif dynamique -->
                <div class="mb-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Récapitulatif de la Réservation</h3>
                    <p class="text-gray-600">Type : {{ $reservation->type == 'site' ? 'Site touristique' : 'Événement culturel' }}</p>
                    <p class="text-gray-600">Sélection : {{ $item->name }}</p>
                    <p class="text-gray-600">Proposé par : {{ $item->provider->name }}</p>
                    <p class="text-gray-600">Date : {{ $reservation->start_date }} {{ $reservation->end_date ? ' - ' . $reservation->end_date : '' }}</p>
                    @if ($reservation->type == 'site')
                        <p class="text-gray-600">Type de visite : {{ ucfirst($reservation->visit_type) }}</p>
                    @else
                        <p class="text-gray-600">Type de billet : {{ ucfirst($reservation->ticket_type) }}</p>
                    @endif
                    <p class="text-gray-600">Participants : {{ $reservation->participants }}</p>
                    <p class="text-gray-600">Montant : {{ number_format($reservation->amount, 0, ',', ' ') }} FCFA</p>
                </div>

                <h3 class="text-lg font-medium text-gray-900 mb-4">Choisissez un Moyen de Paiement</h3>
                <form action="{{ route('paiement.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Moyen de paiement</label>
                        <div class="flex space-x-4">
                            <label class="flex items-center">
                                <input type="radio" name="payment_method" value="card" class="mr-2" onchange="togglePaymentFields('card')" checked>
                                Carte bancaire
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="payment_method" value="mobile_money" class="mr-2" onchange="togglePaymentFields('mobile_money')">
                                Mobile Money
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="payment_method" value="paypal" class="mr-2" onchange="togglePaymentFields('paypal')">
                                PayPal
                            </label>
                        </div>
                    </div>

                    <!-- Champs pour carte bancaire -->
                    <div id="card_fields" class="space-y-4">
                        <div>
                            <label for="card_number" class="block text-sm font-medium text-gray-700">Numéro de carte</label>
                            <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9012 3456" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label for="card_holder" class="block text-sm font-medium text-gray-700">Titulaire de la carte</label>
                            <input type="text" id="card_holder" name="card_holder" placeholder="Nom complet" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label for="card_expiry" class="block text-sm font-medium text-gray-700">Date d'expiration</label>
                                <input type="text" id="card_expiry" name="card_expiry" placeholder="MM/AA" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            </div>
                            <div>
                                <label for="card_cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                                <input type="text" id="card_cvv" name="card_cvv" placeholder="123" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            </div>
                        </div>
                    </div>

                    <!-- Champs pour Mobile Money -->
                    <div id="mobile_money_fields" class="space-y-4 hidden">
                        <div>
                            <label for="mobile_number" class="block text-sm font-medium text-gray-700">Numéro de téléphone</label>
                            <input type="text" id="mobile_number" name="mobile_number" placeholder="+229 1234 5678" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                        <div>
                            <label for="mobile_operator" class="block text-sm font-medium text-gray-700">Opérateur</label>
                            <select id="mobile_operator" name="mobile_operator" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option value="">Sélectionnez un opérateur</option>
                                <option value="MTN">MTN</option>
                                <option value="Moov">Moov</option>
                            </select>
                        </div>
                    </div>

                    <!-- Champs pour PayPal -->
                    <div id="paypal_fields" class="space-y-4 hidden">
                        <div>
                            <label for="paypal_email" class="block text-sm font-medium text-gray-700">Email PayPal</label>
                            <input type="email" id="paypal_email" name="paypal_email" placeholder="votre@email.com" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                        </div>
                    </div>

                    <button type="submit" class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                        Payer maintenant <i class="fas fa-credit-card ml-2"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePaymentFields(method) {
            document.getElementById('card_fields').classList.add('hidden');
            document.getElementById('mobile_money_fields').classList.add('hidden');
            document.getElementById('paypal_fields').classList.add('hidden');

            if (method === 'card') {
                document.getElementById('card_fields').classList.remove('hidden');
            } else if (method === 'mobile_money') {
                document.getElementById('mobile_money_fields').classList.remove('hidden');
            } else if (method === 'paypal') {
                document.getElementById('paypal_fields').classList.remove('hidden');
            }
        }
    </script>
@endsection