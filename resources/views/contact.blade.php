<!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Plateforme Touristique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="../asset/favicon.png">


    <style>
        .bg-benin {
            background-image: url('../asset/ChatGPT Image 31 mars 2025, 15_31_20.webp'); /* Remplacez par le chemin de votre image */
            background-size: cover;
            background-position: center;
        }
    </style>
 </head>
 <body>
 <header id="accueil" class="relative bg-benin bg-cover bg-center min-h-screen flex flex-col justify-center text-white">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <nav id="navbar" class="fixed top-0 left-0 w-full bg-white shadow-lg py-4 z-50 transition-all duration-300">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-2xl font-bold text-green-500">Tourisme Bénin</h1>
            <div class="flex items-center">
                <ul class="hidden md:flex items-center space-x-6" id="nav-list">
                    <li><a href="{{ route('accueil') }}" class="text-black hover:text-green-400 transition-colors">Accueil</a></li>
                    <li><a href="{{ route('Apropos') }}" class="text-black hover:text-green-400 transition-colors">À Propos</a></li>
                    <li><a href="{{ route('sites') }}" class="text-black hover:text-green-400 transition-colors">Sites Touristiques</a></li>
                    <li><a href="{{ route('evenements') }}" class="text-black hover:text-green-400 transition-colors">Événements</a></li>
                    <li><a href="{{ route('contact') }}" class="text-black hover:text-green-400 transition-colors">Contact</a></li>
                </ul>
                <a href="{{ route('login') }}" class="hidden md:block bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700 transition-all ml-4">Connexion</a>
                <button id="menu-toggle" class="md:hidden text-black focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
            <ul class="flex flex-col items-center space-y-4 py-4">
                <li><a href="{{ route('accueil') }}" class="text-black hover:text-green-400 transition-colors">Accueil</a></li>
                <li><a href="{{ route('Apropos') }}" class="text-black hover:text-green-400 transition-colors">À Propos</a></li>
                <li><a href="{{ route('sites') }}" class="text-black hover:text-green-400 transition-colors">Sites Touristiques</a></li>
                <li><a href="{{ route('evenements') }}" class="text-black hover:text-green-400 transition-colors">Événements</a></li>
                <li><a href="{{ route('contact') }}" class="text-black hover:text-green-400 transition-colors">Contact</a></li>
                <li><a href="{{ route('login') }}" class="bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700 transition-all">Connexion</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto px-6 relative z-10 text-center mt-32">
        <h2 class="text-4xl font-bold">Contactez-nous</h2>
        <p class="mt-4 text-lg">Une question ? Besoin d'informations ? Remplissez le formulaire ci-dessous ou contactez-nous directement.</p>
    </div>
</header>
<!-- Section Contact -->
<div class="container mx-auto px-6 py-12 grid md:grid-cols-2 gap-8">
    <!-- Colonne Informations -->
    <div class="relative py-16 bg-cover bg-center flex flex-col justify-center p-6 rounded-lg shadow-lg" 
        style="background-image: url('../asset/3.webp');">
        <!-- Superposition sombre pour améliorer la lisibilité -->
        <div class="absolute inset-0 bg-black bg-opacity-50 rounded-lg"></div>
        
        <div class="relative z-10 text-white">
            <h3 class="text-3xl font-semibold mb-6">Nos Coordonnées</h3>
            <div class="mb-4 flex items-center">
                <span class="text-green-400 text-2xl mr-3">📍</span>
                <p class="text-lg">545 Mavis Island, Cotonou, Bénin</p>
            </div>
            <div class="mb-4 flex items-center">
                <span class="text-green-400 text-2xl mr-3">📞</span>
                <p class="text-lg">+229 97 234 567</p>
            </div>
            <div class="mb-4 flex items-center">
                <span class="text-green-400 text-2xl mr-3">✉️</span>
                <p class="text-lg">contact@exemple.com</p>
            </div>
        </div>
    </div>

    <!-- Formulaire de Contact -->
    <form action="/submit-contact" method="POST" 
        class="relative py-12 px-6 bg-white shadow-lg rounded-lg">
        <h3 class="text-3xl font-semibold text-gray-800 mb-6">Envoyez-nous un message</h3>
        
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="prenom" class="block text-gray-700 font-medium">Prénom</label>
                <input type="text" id="prenom" name="prenom" required 
                    class="w-full p-3 mt-1 border rounded-lg focus:ring-2 focus:ring-green-500 outline-none transition">
            </div>
            <div>
                <label for="nom" class="block text-gray-700 font-medium">Nom</label>
                <input type="text" id="nom" name="nom" required 
                    class="w-full p-3 mt-1 border rounded-lg focus:ring-2 focus:ring-green-500 outline-none transition">
            </div>
        </div>
        
        <div class="mt-4">
            <label for="email" class="block text-gray-700 font-medium">Email</label>
            <input type="email" id="email" name="email" required 
                class="w-full p-3 mt-1 border rounded-lg focus:ring-2 focus:ring-green-500 outline-none transition">
        </div>

        <div class="mt-4">
            <label for="message" class="block text-gray-700 font-medium">Message</label>
            <textarea id="message" name="message" rows="4" required 
                class="w-full p-3 mt-1 border rounded-lg focus:ring-2 focus:ring-green-500 outline-none transition"></textarea>
        </div>

        <button type="submit" 
            class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 mt-4 transition">
            Envoyer
        </button>
    </form>
</div>


@include('partials.footer')
<script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>













  

