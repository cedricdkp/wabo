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
        <h2 class="text-4xl font-bold">Qui sommes-nous ?</h2>
        <p class="mt-4 text-lg">Une plateforme dédiée à la mise en valeur du patrimoine culturel et touristique du Bénin.</p>
    </div>
</header>

<main class="container mx-auto px-6 py-12">
        <section class="bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center">{{ $title }}</h1>
            <img src="{{ $image }}" alt="{{ $alt }}" class="w-full h-auto object-cover rounded-lg mb-6" loading="lazy">
            <p class="text-lg text-gray-700 leading-relaxed">{{ $description }}</p>
            <a href="{{ route('accueil') }}" class="mt-6 inline-block bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700 transition-all">Retour à l'accueil</a>
        </section>
    </main>

@include('partials.footer')
<script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>













  

