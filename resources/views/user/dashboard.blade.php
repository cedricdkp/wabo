@extends('layouts.app')

@section('content')
    <div class="px-4 py-6 sm:px-0">
        <!-- Section Bienvenue -->
        <section class="bg-white shadow rounded-lg p-6 mb-6 bg-benin relative">
            <div class="absolute inset-0 bg-black opacity-40 rounded-lg"></div>
            <div class="relative z-10">
                <h2 class="text-3xl font-bold text-white mb-2">Bienvenue, {{ Auth::user()->name }} !</h2>
                <p class="text-lg text-white mb-4">Découvrez le Bénin, une terre d'aventures et de cultures vibrantes !</p>
                <a href="{{ route('reserver') }}" class="inline-flex items-center px-6 py-3 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                    Réserver maintenant <i class="fas fa-ticket-alt ml-2"></i>
                </a>
            </div>
        </section>

        <!-- Section Événements culturels -->
        <section class="bg-white shadow rounded-lg p-6 mb-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-900">Événements Culturels</h2>
                <a href="{{ route('evenements') }}" class="inline-flex items-center px-4 py-2 text-green-600 hover:text-green-500 font-medium bg-green-50 rounded-md hover:bg-green-100 transition duration-300">
                    Voir plus <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Événement 1: Festival Vaudou -->
                <div class="text-center">
                    <a href="{{ route('reserver', ['type' => 'evenement', 'item' => 'Festival Vaudou']) }}" class="relative group block mb-2">
                        <img src="{{ asset('asset/festival-vaudou.webp') }}" alt="Festival Vaudou" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                            Festival Vaudou
                        </div>
                    </a>
                    <div class="text-sm text-gray-700 mb-4">Un événement spirituel unique à Ouidah, célébrant les traditions vaudou avec des danses et cérémonies, du 10 au 12 janvier 2026.</div>
                    <a href="{{ route('reserver', ['type' => 'evenement', 'item' => 'Festival Vaudou']) }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                        Réserver <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <!-- Événement 2: Fête de Porto-Novo -->
                <div class="text-center">
                    <a href="{{ route('reserver', ['type' => 'evenement', 'item' => 'Fête de Porto-Novo']) }}" class="relative group block mb-2">
                        <img src="{{ asset('asset/fete-porto-novo.webp') }}" alt="Fête de Porto-Novo" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                            Fête de Porto-Novo
                        </div>
                    </a>
                    <div class="text-sm text-gray-700 mb-4">Une célébration gratuite de la culture porto-novienne avec des parades et spectacles, du 15 au 17 mars 2026.</div>
                    <a href="{{ route('reserver', ['type' => 'evenement', 'item' => 'Fête de Porto-Novo']) }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                        Réserver <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Section Sites touristiques -->
        <section class="bg-white shadow rounded-lg p-6 mb-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-900">Sites Touristiques</h2>
                <a href="{{ route('destinations') }}" class="inline-flex items-center px-4 py-2 text-green-600 hover:text-green-500 font-medium bg-green-50 rounded-md hover:bg-green-100 transition duration-300">
                    Voir plus <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Destination 1: Ganvié -->
                <div class="text-center">
                    <a href="{{ route('reserver', ['type' => 'site', 'item' => 'Ganvié']) }}" class="relative group block mb-2">
                        <img src="{{ asset('asset/ganvie.webp') }}" alt="Ganvié" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                            Ganvié
                        </div>
                    </a>
                    <div class="text-sm text-gray-700 mb-4">Surnommé la "Venise de l'Afrique", Ganvié est un village lacustre unique où les habitants vivent sur l'eau.</div>
                    <a href="{{ route('reserver', ['type' => 'site', 'item' => 'Ganvié']) }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                        Réserver <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <!-- Destination 2: Porto-Novo -->
                <div class="text-center">
                    <a href="{{ route('reserver', ['type' => 'site', 'item' => 'Porto-Novo']) }}" class="relative group block mb-2">
                        <img src="{{ asset('asset/porto-novo.webp') }}" alt="Porto-Novo" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                            Porto-Novo
                        </div>
                    </a>
                    <div class="text-sm text-gray-700 mb-4">La capitale du Bénin, riche en histoire avec ses musées, marchés et architecture coloniale.</div>
                    <a href="{{ route('reserver', ['type' => 'site', 'item' => 'Porto-Novo']) }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                        Réserver <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <!-- Destination 3: Ouidah -->
                <div class="text-center">
                    <a href="{{ route('reserver', ['type' => 'site', 'item' => 'Ouidah']) }}" class="relative group block mb-2">
                        <img src="{{ asset('asset/ouidah.webp') }}" alt="Ouidah" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                            Ouidah
                        </div>
                    </a>
                    <div class="text-sm text-gray-700 mb-4">Un haut lieu historique avec la Route des Esclaves et des temples vaudou emblématiques.</div>
                    <a href="{{ route('reserver', ['type' => 'site', 'item' => 'Ouidah']) }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                        Réserver <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Section Offres spéciales -->
        <section class="bg-white shadow rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-900">Offres Spéciales</h2>
                <a href="{{ route('offres') }}" class="inline-flex items-center px-4 py-2 text-green-600 hover:text-green-500 font-medium bg-green-50 rounded-md hover:bg-green-100 transition duration-300">
                    Voir plus <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-green-50 p-4 rounded-md">
                    <h3 class="text-lg font-medium text-gray-900">Visite guidée à Ganvié</h3>
                    <p class="text-gray-600 mt-2">50% de réduction jusqu'au 30 juin 2025.</p>
                    <a href="{{ route('reserver', ['type' => 'site', 'item' => 'Ganvié']) }}" class="mt-4 inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                        Réserver <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="bg-green-50 p-4 rounded-md">
                    <h3 class="text-lg font-medium text-gray-900">Circuit à Ouidah</h3>
                    <p class="text-gray-600 mt-2">Offre spéciale pour les groupes.</p>
                    <a href="{{ route('reserver', ['type' => 'site', 'item' => 'Ouidah']) }}" class="mt-4 inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                        Réserver <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection