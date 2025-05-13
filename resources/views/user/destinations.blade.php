@extends('layouts.app')

@section('content')
    <div class="px-4 py-6 sm:px-0">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Destinations Populaires</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-green-50 p-4 rounded-md">
                    <h3 class="text-lg font-medium text-gray-900">Ganvié</h3>
                    <p class="text-gray-600 mt-2">Le village sur l'eau, un incontournable du Bénin.</p>
                </div>
                <div class="bg-green-50 p-4 rounded-md">
                    <h3 class="text-lg font-medium text-gray-900">Porto-Novo</h3>
                    <p class="text-gray-600 mt-2">La capitale riche en histoire et culture.</p>
                </div>
                <div class="bg-green-50 p-4 rounded-md">
                    <h3 class="text-lg font-medium text-gray-900">Ouidah</h3>
                    <p class="text-gray-600 mt-2">Découvrez la route des esclaves et les temples vaudous.</p>
                </div>
            </div>
        </div>
    </div>
@endsection