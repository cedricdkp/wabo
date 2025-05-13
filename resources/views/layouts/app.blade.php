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
            background-image: url('{{ asset('asset/background.jpg') }}');
            background-size: cover;
            background-position: center;
        }
        .sidebar {
            transition: transform 0.3s ease-in-out;
        }
        .sidebar-hidden {
            transform: translateX(-100%);
        }
        .notification-badge {
            top: -8px;
            right: -8px;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex">
    <!-- Sidebar -->
    <aside class="sidebar fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-50 sidebar-hidden" id="sidebar">
        <div class="flex items-center justify-between p-4 border-b">
            <div class="flex items-center">
                <img class="h-8 w-auto" src="{{ asset('asset/favicon.png') }}" alt="Logo">
                <span class="ml-3 text-lg font-bold text-gray-900">Tourisme Bénin</span>
            </div>
            <button class="text-gray-600" onclick="toggleSidebar()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <nav class="mt-4">
            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 {{ Route::is('dashboard') ? 'border-l-4 border-green-500' : '' }}">
                <i class="fas fa-home mr-3"></i> Tableau de Bord
            </a>
            <a href="{{ route('destinations') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 {{ Route::is('destinations') ? 'border-l-4 border-green-500' : '' }}">
                <i class="fas fa-map-marked-alt mr-3"></i> Destinations
            </a>
            <a href="{{ route('planification') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 {{ Route::is('planification') ? 'border-l-4 border-green-500' : '' }}">
                <i class="fas fa-calendar-alt mr-3"></i> Planification
            </a>
            <a href="{{ route('reserver') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 {{ Route::is('reserver') ? 'border-l-4 border-green-500' : '' }}">
                <i class="fas fa-book mr-3"></i> Réserver
            </a>
            <a href="{{ route('paiement') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 {{ Route::is('paiement') ? 'border-l-4 border-green-500' : '' }}">
                <i class="fas fa-credit-card mr-3"></i> Paiement
            </a>
            <a href="{{ route('evenements') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 {{ Route::is('evenements') ? 'border-l-4 border-green-500' : '' }}">
                <i class="fas fa-theater-masks mr-3"></i> Événements culturels
            </a>

            <a href="{{ route('reservations') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 {{ Route::is('reservations') ? 'border-l-4 border-green-500' : '' }}">
                <i class="fas fa-ticket-alt mr-3"></i> Réservations
            </a>
            <a href="{{ route('offres') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 {{ Route::is('offres') ? 'border-l-4 border-green-500' : '' }}">
                <i class="fas fa-tag mr-3"></i> Offres spéciales
            </a>
            <a href="{{ route('avis') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 {{ Route::is('avis') ? 'border-l-4 border-green-500' : '' }}">
                <i class="fas fa-comment mr-3"></i> Donner son avis
            </a>
            <a href="{{ route('profil') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600 {{ Route::is('profil') ? 'border-l-4 border-green-500' : '' }}">
                <i class="fas fa-user mr-3"></i> Profil
            </a>
        </nav>
    </aside>

    <!-- Contenu principal -->
    <div class="flex-1 flex flex-col">
        <!-- Barre supérieure -->
        <header class="bg-white shadow flex items-center justify-between p-4">
            <div>
                <button class="text-gray-600" onclick="toggleSidebar()">
                    <i class="fas fa-bars"></i>
                </button>
                <span class="text-2xl font-bold text-green-500">Tourisme Bénin</span>
            </div>

            <div class="flex items-center space-x-4">
                <div class="relative">
                    <button onclick="toggleNotifications()" class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-bell"></i>
                        <span class="absolute notification-badge bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </button>
                    <div id="notifications" class="hidden absolute right-0 mt-2 w-64 bg-white shadow-lg rounded-lg p-4 z-50">
                        <h4 class="text-sm font-medium text-gray-900 mb-2">Notifications</h4>
                        <ul class="text-sm text-gray-600">
                            <li class="mb-2">Nouveau festival à Porto-Novo !</li>
                            <li class="mb-2">Offre spéciale pour Ganvié disponible.</li>
                            <li>Votre avis sur Ouidah a été publié.</li>
                        </ul>
                    </div>
                </div>
                <span class="text-gray-900">{{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-sm text-green-600 hover:text-green-500">Déconnexion</button>
                </form>
            </div>
        </header>

        <!-- Contenu des pages -->
        <main class="flex-1 max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            @yield('content')
        </main>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('sidebar-hidden');
        }

        function toggleNotifications() {
            const notifications = document.getElementById('notifications');
            notifications.classList.toggle('hidden');
        }
    </script>
</body>
</html>
