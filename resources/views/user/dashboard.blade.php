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
                @foreach ($events as $event)
                    <div class="text-center">
                        <a href="{{ route('reserver', ['type' => 'evenement', 'item' => $event->id]) }}" class="relative group block mb-2">
                            <img src="{{ asset('asset/' . $event->image) }}" alt="{{ $event->name }}" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                                {{ $event->name }}
                            </div>
                        </a>
                        <div class="text-sm text-gray-700 mb-2">{{ $event->description }}</div>
                        <div class="text-xs text-gray-500 mb-4">Proposé par {{ $event->provider->name }}</div>
                        <a href="{{ route('reserver', ['type' => 'evenement', 'item' => $event->id]) }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                            Réserver <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                @endforeach
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
                @foreach ($sites as $site)
                    <div class="text-center">
                        <a href="{{ route('reserver', ['type' => 'site', 'item' => $site->id]) }}" class="relative group block mb-2">
                            <img src="{{ asset('asset/' . $site->image) }}" alt="{{ $site->name }}" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                                {{ $site->name }}
                            </div>
                        </a>
                        <div class="text-sm text-gray-700 mb-2">{{ $site->description }}</div>
                        <div class="text-xs text-gray-500 mb-4">Proposé par {{ $site->provider->name }}</div>
                        <a href="{{ route('reserver', ['type' => 'site', 'item' => $site->id]) }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                            Réserver <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                @endforeach
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
                @foreach ($offers as $offer)
                    <div class="text-center">
                        <a href="{{ route('reserver', ['type' => 'site', 'item' => $offer->id]) }}" class="relative group block mb-2">
                            <img src="{{ asset('asset/' . $offer->image) }}" alt="{{ $offer->name }}" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                                {{ $offer->name }}
                            </div>
                        </a>
                        <div class="text-sm text-gray-700 mb-2">{{ $offer->description }}</div>
                        <div class="text-xs text-gray-500 mb-4">Proposé par {{ $offer->provider->name }}</div>
                        <a href="{{ route('reserver', ['type' => 'site', 'item' => $offer->id]) }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500 font-medium">
                            Réserver <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection