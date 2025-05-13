@extends('layouts.app')

@section('content')
    <div class="px-4 py-6 sm:px-0">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Offres Spéciales</h2>
            <p class="text-gray-600 mb-6">Profitez de nos promotions exclusives.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-green-50 p-4 rounded-md">
                    <h3 class="text-lg font-medium text-gray-900">Visite guidée à Ganvié</h3>
                    <p class="text-gray-600 mt-2">50% de réduction jusqu'au 30 juin 2025.</p>
                    <a href="{{ route('reservations') }}" class="mt-4 inline-block text-green-600 hover:text-green-500 font-medium">Réserver <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
                <div class="bg-green-50 p-4 rounded-md">
                    <h3 class="text-lg font-medium text-gray-900">Circuit à Ouidah</h3>
                    <p class="text-gray-600 mt-2">Offre spéciale pour les groupes.</p>
                    <a href="{{ route('reservations') }}" class="mt-4 inline-block text-green-600 hover:text-green-500 font-medium">Réserver <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection