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
<section id="objectif" class="container mx-auto px-6 py-12 flex flex-col md:flex-row items-center justify-between">
    <!-- Section image -->
    <div class="w-full md:w-1/2 flex justify-center">
        <img src="../asset/ChatGPT Image 31 mars 2025, 16_52_17.webp" alt="Objectif de la plateforme" class="w-full md:w-10/12 rounded-lg shadow-xl transform hover:scale-105 transition-all duration-300">
    </div>

    <!-- Section texte -->
    <div class="w-full md:w-1/2 md:pl-8">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-4 text-center md:text-left">Notre Mission</h2>
        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center md:text-left">
            Nous avons pour mission de promouvoir le tourisme au Bénin en offrant une plateforme intuitive pour découvrir, réserver et explorer les merveilles culturelles et naturelles du pays. Que vous soyez un voyageur à la recherche d'aventures authentiques ou un passionné de culture, notre plateforme vous accompagne à chaque étape de votre découverte. Nous mettons également un accent particulier sur les événements culturels uniques tels que des festivals, des expositions et des spectacles traditionnels, afin de vous immerger pleinement dans l'âme du Bénin à travers des expériences inoubliables.
        </p>
    </div>
</section>


<section class="container mx-auto px-6 py-12 bg-gray-100 rounded-lg">
    <h3 class="text-3xl font-bold text-gray-900 text-center mb-6">Pourquoi choisir notre plateforme ?</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-gray-700">
        <div class="bg-white p-6 rounded-lg shadow-md hover:bg-green-500 hover:text-white transition-colors duration-300">
            <h4 class="text-xl font-semibold">Facilité de réservation</h4>
            <p class="mt-2">Réservez vos visites et événements en toute simplicité grâce à notre plateforme intuitive.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:bg-blue-500 hover:text-white transition-colors duration-300">
            <h4 class="text-xl font-semibold">Expériences authentiques</h4>
            <p class="mt-2">Plongez dans la culture béninoise à travers des circuits personnalisés et des événements uniques.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md hover:bg-yellow-500 hover:text-white transition-colors duration-300">
            <h4 class="text-xl font-semibold">Accompagnement 24/7</h4>
            <p class="mt-2">Notre service client est disponible à tout moment pour vous aider dans vos réservations.</p>
        </div>
    </div>
</section>

<section class="container mx-auto px-6 py-12">
    <h3 class="text-3xl font-bold text-gray-900 text-center mb-6">Nos Valeurs</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-gray-700">
        <div class="bg-white p-6 rounded-lg shadow-md border border-gray-300">
            <ul class="list-disc list-inside space-y-3">
                <li><strong>Authenticité :</strong> Offrir des expériences réelles et immersives aux visiteurs.</li>
                <li><strong>Accessibilité :</strong> Rendre le tourisme au Bénin facile et agréable pour tous.</li>
                <li><strong>Innovation :</strong> Utiliser la technologie pour améliorer l’expérience des voyageurs.</li>
            </ul>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md border border-gray-300">
            <ul class="list-disc list-inside space-y-3">
                <li><strong>Durabilité :</strong> Encourager un tourisme responsable et respectueux de l’environnement.</li>
                <li><strong>Collaboration :</strong> Travailler avec les agences locales pour soutenir l’économie du pays.</li>
                <li><strong>Qualité :</strong> Offrir des services de haute qualité pour une satisfaction totale.</li>
            </ul>
        </div>
    </div>
</section>


<section id="services" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Nos Services</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-gray-700">
        <!-- Service 1 -->
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-blue-500 hover:text-white">
            <svg class="w-12 h-12 text-blue-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 19.5h4.5m-2.25-1.5V3m9 9H3m15.75 0a6.75 6.75 0 01-13.5 0" />
            </svg>
            <p class="text-lg font-medium mt-4">Circuits touristiques guidés</p>
        </div>

        <!-- Service 2 -->
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-green-500 hover:text-white">
            <svg class="w-12 h-12 text-green-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M4 6h16M5 14h14M6 18h12" />
            </svg>
            <p class="text-lg font-medium mt-4">Réservations d'hôtels</p>
        </div>

        <!-- Service 3 -->
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-yellow-500 hover:text-white">
            <svg class="w-12 h-12 text-yellow-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8m-4-4v8m-6 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <p class="text-lg font-medium mt-4">Transport sécurisé</p>
        </div>

        <!-- Service 4 -->
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-red-500 hover:text-white">
            <svg class="w-12 h-12 text-red-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-4 0-6 2-6 6v4h12v-4c0-4-2-6-6-6zM4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2" />
            </svg>
            <p class="text-lg font-medium mt-4">Événements culturels</p>
        </div>

        <!-- Service 5 -->
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-purple-500 hover:text-white">
            <svg class="w-12 h-12 text-purple-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <p class="text-lg font-medium mt-4">Expériences culinaires</p>
        </div>

        <!-- Service 6 -->
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-indigo-500 hover:text-white">
            <svg class="w-12 h-12 text-indigo-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m3 18V3m6 7h2a2 2 0 012 2v8a2 2 0 01-2 2h-2m-6-7h6" />
            </svg>
            <p class="text-lg font-medium mt-4">Service client 24/7</p>
        </div>
    </div>
</section>

@include('partials.footer')
<script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>













  

