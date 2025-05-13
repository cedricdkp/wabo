@extends('layouts.app')

@section('content')
    <div class="px-4 py-6 sm:px-0">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Donner Votre Avis</h2>
            <p class="text-gray-600 mb-6">Partagez votre expérience sur les destinations visitées.</p>
            <div class="bg-green-50 p-4 rounded-md">
                <h3 class="text-lg font-medium text-gray-900">Soumettre un avis</h3>
                <form action="{{ route('avis.store') }}" method="POST" class="mt-4 space-y-4">
                    @csrf
                    <div>
                        <label for="destination" class="block text-sm font-medium text-gray-700">Destination</label>
                        <select id="destination" name="destination" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            <option>Ganvié</option>
                            <option>Porto-Novo</option>
                            <option>Ouidah</option>
                        </select>
                    </div>
                    <div>
                        <label for="comment" class="block text-sm font-medium text-gray-700">Commentaire</label>
                        <textarea id="comment" name="comment" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-500">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
@endsection