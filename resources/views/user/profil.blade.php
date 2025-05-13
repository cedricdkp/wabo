@extends('layouts.app')

@section('content')
    <div class="px-4 py-6 sm:px-0">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Votre Profil</h2>
            <p class="text-gray-600 mb-6">Gérez vos informations personnelles et préférences.</p>
            <div class="bg-green-50 p-4 rounded-md">
                <h3 class="text-lg font-medium text-gray-900">Informations</h3>
                <p class="text-gray-600 mt-2">Nom : {{ Auth::user()->name }}</p>
                <p class="text-gray-600">Email : {{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
@endsection
