@extends('layouts.app')

@section('content')
    <div class="px-4 py-6 sm:px-0">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Planifiez Votre Voyage</h2>
            <p class="text-gray-600 mb-6">Utilisez notre outil pour organiser votre itinéraire.</p>
            <div class="bg-green-50 p-4 rounded-md">
                <h3 class="text-lg font-medium text-gray-900">Étape 1 : Choisissez une destination</h3>
                <p class="text-gray-600 mt-2">Sélectionnez parmi nos destinations populaires.</p>
                <a href="{{ route('destinations') }}" class="mt-4 inline-block text-green-600 hover:text-green-500 font-medium">Voir les destinations <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
        </div>
    </div>
@endsection