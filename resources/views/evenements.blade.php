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
        <h2 class="text-4xl font-bold">Vivez la culture en direct : participez à nos événements culturels et créez des souvenirs inoubliables!</h2>
        <p class="mt-4 text-lg">Immergez-vous dans la diversité culturelle grâce à notre sélection d'événements captivants. Des festivals traditionnels aux spectacles modernes, chaque événement est une célébration de l'art, de la musique et des traditions locales. Plongez dans l'ambiance festive et laissez-vous transporter par des moments uniques et authentiques. Réservez vos places dès maintenant et profitez pleinement de l'effervescence culturelle !</p>
    </div>
</header>
<section id="evenements-culturels" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Nos Événements Culturels Populaires</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Événement 1 : VoDun Days -->
        <div>
            <a href="festival1.html" class="relative group">
                <img src="../asset/OIP (2).webp" alt="VoDun Days" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    VoDun Days
                </div>
            </a>
            <p class="mt-2 text-center text-gray-700 text-sm">
                Le festival VoDun Days, célébré à Ouidah, met en lumière les traditions vaudou béninoises à travers des danses, des rituels et des cérémonies spirituelles.
            </p>
        </div>

        <!-- Événement 2 : Festival de Musique -->
        <div>
            <a href="exposition1.html" class="relative group">
                <img src="../asset/OIP (3).webp" alt="Festival de Musique" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Festival de Musique
                </div>
            </a>
            <p class="mt-2 text-center text-gray-700 text-sm">
                Un événement incontournable où artistes locaux et internationaux se réunissent pour célébrer la richesse musicale africaine, du traditionnel au contemporain.
            </p>
        </div>

        <!-- Événement 3 : Atelier Traditionnel et Exposition d'Art Contemporain -->
        <div>
            <a href="atelier1.html" class="relative group">
                <img src="../asset/IMG-20240412-WA0145.webp" alt="Atelier Traditionnel et Exposition d'Art Contemporain" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Atelier Traditionnel & Exposition d'Art
                </div>
            </a>
            <p class="mt-2 text-center text-gray-700 text-sm">
                Un espace dédié à l'art et aux savoir-faire traditionnels où artistes et artisans exposent leurs œuvres et partagent leurs techniques avec le public.
            </p>
        </div>

        <!-- Événement 4 : Festival des Masques à Porto-Novo -->
        <div>
            <a href="festival2.html" class="relative group">
                <img src="../asset/4.webp" alt="Festival des Masques à Porto-Novo" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Festival des Masques - Porto-Novo
                </div>
            </a>
            <p class="mt-2 text-center text-gray-700 text-sm">
                Ce festival met à l'honneur les traditions des masques Gèlèdé et Egungun à travers des spectacles de danse, des processions et des performances artistiques.
            </p>
        </div>

        <!-- Événement 5 : Fête de l'Igname à Savalou -->
        <div>
            <a href="concert1.html" class="relative group">
                <img src="../asset/savalou.webp" alt="Fête de l'Igname à Savalou" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Fête de l'Igname - Savalou
                </div>
            </a>
            <p class="mt-2 text-center text-gray-700 text-sm">
                Une célébration annuelle où la communauté rend hommage à l'igname, aliment de base, à travers des rites traditionnels, des danses et des festins.
            </p>
        </div>

        <!-- Événement 6 : Fête de l'Indépendance du Bénin -->
        <div>
            <a href="exposition2.html" class="relative group">
                <img src="../asset/OIP.webp" alt="Fête de l'Indépendance du Bénin" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Fête de l'Indépendance
                </div>
            </a>
            <p class="mt-2 text-center text-gray-700 text-sm">
                Le 1er août, le Bénin célèbre son indépendance avec des défilés, des concerts et des feux d'artifice, un moment fort pour l'unité nationale.
            </p>
        </div>
    </div>
</section>

@include('partials.footer')
<script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>













  

