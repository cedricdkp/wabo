@extends('layouts.app')

@section('content')
    <div class="px-4 py-6 sm:px-0">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Faire une Réservation</h2>
            <p class="text-gray-600 mb-6">Réservez un site touristique ou un événement culturel au Bénin.</p>
            <div class="bg-green-50 p-4 rounded-md">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Détails de la Réservation</h3>
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Type de réservation</label>
                    <select id="type" name="type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" onchange="updateForm()">
                        <option value="">Sélectionnez un type</option>
                        <option value="site" {{ $type == 'site' ? 'selected' : '' }}>Site touristique</option>
                        <option value="evenement" {{ $type == 'evenement' ? 'selected' : '' }}>Événement culturel</option>
                    </select>
                </div>

                <!-- Formulaire pour site touristique -->
                <form id="site_form" action="{{ route('reserver.store') }}" method="POST" class="space-y-6 {{ $type != 'site' ? 'hidden' : '' }}">
                    @csrf
                    <input type="hidden" name="type" value="site">
                    <div>
                        <label for="site_id" class="block text-sm font-medium text-gray-700">Site touristique</label>
                        <select id="site_id" name="item_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option value="">Sélectionnez un site</option>
                            @foreach ($sites as $site)
                                <option value="{{ $site->id }}" {{ $item == $site->id ? 'selected' : '' }}>{{ $site->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="visit_date" class="block text-sm font-medium text-gray-700">Date de visite</label>
                        <input type="date" id="visit_date" name="start_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div>
                        <label for="visit_type" class="block text-sm font-medium text-gray-700">Type de visite</label>
                        <select id="visit_type" name="visit_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option value="">Sélectionnez un type</option>
                            <option value="guidée">Guidée</option>
                            <option value="libre">Libre</option>
                        </select>
                    </div>
                    <div>
                        <label for="site_participants" class="block text-sm font-medium text-gray-700">Nombre de personnes</label>
                        <input type="number" id="site_participants" name="participants" min="1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div>
                        <label for="site_comments" class="block text-sm font-medium text-gray-700">Commentaires supplémentaires</label>
                        <textarea id="site_comments" name="comments" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"></textarea>
                    </div>
                    <button type="submit" class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                        Confirmer la Réservation <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </form>

                <!-- Formulaire pour événement culturel -->
                <form id="event_form" action="{{ route('reserver.store') }}" method="POST" class="space-y-6 {{ $type != 'evenement' ? 'hidden' : '' }}">
                    @csrf
                    <input type="hidden" name="type" value="evenement">
                    <div>
                        <label for="event_id" class="block text-sm font-medium text-gray-700">Événement culturel</label>
                        <select id="event_id" name="item_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" onchange="updateEventDate()">
                            <option value="">Sélectionnez un événement</option>
                            @foreach ($events as $event)
                                <option value="{{ $event->id }}" data-date="{{ $event->date }}" {{ $item == $event->id ? 'selected' : '' }}>{{ $event->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="event_date" class="block text-sm font-medium text-gray-700">Date de l'événement</label>
                        <input type="date" id="event_date" name="start_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" readonly>
                    </div>
                    <div>
                        <label for="ticket_type" class="block text-sm font-medium text-gray-700">Type de billet</label>
                        <select id="ticket_type" name="ticket_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                            <option value="">Sélectionnez un type</option>
                            <option value="standard">Standard</option>
                            <option value="vip">VIP</option>
                        </select>
                    </div>
                    <div>
                        <label for="event_participants" class="block text-sm font-medium text-gray-700">Nombre de personnes</label>
                        <input type="number" id="event_participants" name="participants" min="1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                    </div>
                    <div>
                        <label for="event_comments" class="block text-sm font-medium text-gray-700">Commentaires supplémentaires</label>
                        <textarea id="event_comments" name="comments" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"></textarea>
                    </div>
                    <button type="submit" class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                        Confirmer la Réservation <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function updateForm() {
            const type = document.getElementById('type').value;
            document.getElementById('site_form').classList.add('hidden');
            document.getElementById('event_form').classList.add('hidden');
            if (type === 'site') {
                document.getElementById('site_form').classList.remove('hidden');
            } else if (type === 'evenement') {
                document.getElementById('event_form').classList.remove('hidden');
            }
        }

        function updateEventDate() {
            const eventSelect = document.getElementById('event_id');
            const eventDate = document.getElementById('event_date');
            const selectedOption = eventSelect.options[eventSelect.selectedIndex];
            eventDate.value = selectedOption.dataset.date || '';
        }

        document.addEventListener('DOMContentLoaded', function () {
            updateForm();
            updateEventDate();
        });
    </script>
@endsection