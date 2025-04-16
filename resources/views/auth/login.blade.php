<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- Barre de navigation fixe -->
    <div id="navbar" class="fixed top-0 left-0 w-full bg-white shadow-lg py-4 z-50">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-2xl font-bold text-green-500">Tourisme Bénin</h1>
            <nav class="flex items-center space-x-6">
                <ul class="flex space-x-6" id="nav-list">
                    <li><a href="{{ route('accueil') }}" class="text-black hover:text-green-400 transition-colors">Accueil</a></li>
                    <li><a href="{{ route('Apropos') }}" class="text-black  hover:text-green-400 transition-colors"> A Propos</a></li>
                    <li><a href="{{ route('sites') }}" class="text-black  hover:text-green-400 transition-colors">Sites Touristiques</a></li>
                    <li><a href="{{ route('evenements') }}" class="text-black  hover:text-green-400 transition-colors">Événements</a></li>
                    <li><a href="{{ route('contact') }}" class="text-black  hover:text-green-400 transition-colors">Contact</a></li>
                    
                </ul>
                
                <!-- Bouton de connexion amélioré -->
                <a href="{{ route('login') }}" class="bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700 transition-all">Connexion</a>
            </nav>
        </div>
    </div>

    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold text-center mb-6">Connexion</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="w-full p-2 border rounded mt-1">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Mot de passe</label>
                <input type="password" id="password" name="password" required class="w-full p-2 border rounded mt-1">
            </div>

            <button type="submit"  class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600">
                Se connecter
            </button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Pas encore de compte ? <a href="{{ route('register') }}" class="text-blue-500">Inscription</a>
        </p>
    </div>

</body>
</html>
