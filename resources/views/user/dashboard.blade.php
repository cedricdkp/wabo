<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Plateforme Touristique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('asset/favicon.png') }}">
    <style>
        .bg-benin {
            background-image: url('{{ asset('asset/ChatGPT Image 31 mars 2025, 15_31_20.webp') }}');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Barre de navigation -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-8 w-auto" src="{{ asset('asset/favicon.png') }}" alt="Logo">
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{ route('dashboard') }}" class="border-green-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Tableau de Bord</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <div class="ml-3 relative">
                        <span class="text-gray-900">{{ Auth::user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="ml-4 text-sm text-green-600 hover:text-green-500">Déconnexion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Bienvenue, {{ Auth::user()->name }} !</h2>
                <p class="text-gray-600 mb-6">Ceci est votre tableau de bord. Explorez les destinations touristiques du Bénin et planifiez votre prochaine aventure !</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-green-50 p-4 rounded-md">
                        <h3 class="text-lg font-medium text-gray-900">Découvrir Ganvié</h3>
                        <p class="text-gray-600 mt-2">Visitez le célèbre village lacustre, surnommé la "Venise de l'Afrique".</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-500 font-medium">En savoir plus <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                    <div class="bg-green-50 p-4 rounded-md">
                        <h3 class="text-lg font-medium text-gray-900">Planifier un voyage</h3>
                        <p class="text-gray-600 mt-2">Organisez votre itinéraire avec nos recommandations personnalisées.</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-500 font-medium">Commencer <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>