@extends('layouts.app')

@section('content')
    <div class="px-4 py-6 sm:px-0">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Événements Culturels</h2>
            <p class="text-gray-600 mb-6">Découvrez les festivals et événements à venir au Bénin.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-green-50 p-4 rounded-md">
                    <h3 class="text-lg font-medium text-gray-900">Festival Vaudou</h3>
                    <p class="text-gray-600 mt-2">10-12 janvier 2026, Ouidah</p>
                </div>
                <div class="bg-green-50 p-4 rounded-md">
                    <h3 class="text-lg font-medium text-gray-900">Fête de Porto-Novo</h3>
                    <p class="text-gray-600 mt-2">15-17 mars 2026, Porto-Novo</p>
                </div>
            </div>
        </div>
    </div>
@endsection