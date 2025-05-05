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
            background-image: url('../asset/ChatGPT Image 31 mars 2025, 15_31_20.webp');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-100">
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
        <h2 class="text-4xl font-bold">Découvrez le Bénin autrement</h2>
        <p class="mt-4 text-lg">Explorez des sites exceptionnels, assistez à des événements culturels inoubliables et trouvez l'hébergement parfait.</p>

        <form action="{{ route('search') }}" method="GET">
            <div class="flex items-center border border-gray-300 rounded-full overflow-hidden mt-6 max-w-lg mx-auto bg-white">
                <input type="text" placeholder="Rechercher un site ou un événement..." class="px-4 py-2 w-full border-none outline-none text-black" aria-label="Rechercher un site ou un événement">
                <button class="bg-green-600 text-white px-6 py-2 rounded-full hover:bg-green-700 transition-all ml-2">Rechercher</button>
            </div>
        </form>
    </div>
</header>

<section id="objectif" class="container mx-auto px-6 py-12 flex flex-col md:flex-row items-center justify-between">
    <div class="w-full md:w-1/2 flex justify-center">
        <img src="../asset/ChatGPT Image 31 mars 2025, 16_52_17.webp" alt="Paysage culturel du Bénin" class="w-full md:w-10/12 rounded-lg shadow-xl transform hover:scale-105 transition-all duration-300" loading="lazy">
    </div>
    <div class="w-full md:w-1/2 md:pl-8">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-4 text-center md:text-left">À propos de nous</h2>
        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center md:text-left">
            Nous facilitons la découverte du Bénin en offrant aux voyageurs des expériences authentiques avec les meilleures agences et guides locaux. De plus, vivez la culture béninoise à travers des festivals, des expositions d'art, et des ateliers traditionnels. Explorez notre large gamme de services pour une immersion totale dans la culture béninoise.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
            <ul class="list-disc list-inside space-y-3">
                <li>Vols et hébergements de qualité</li>
                <li>Transport moderne et sécurisé</li>
                <li>Circuits premium à travers le Bénin</li>
            </ul>
            <ul class="list-disc list-inside space-y-3">
                <li>Festivals et événements culturels</li>
                <li>Ateliers d’art et traditions locales</li>
                <li>Service disponible 24/7</li>
            </ul>
        </div>
    </div>
</section>

<section id="services" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Nos Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-gray-700">
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-blue-500 hover:text-white">
            <svg class="w-12 h-12 text-blue-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 19.5h4.5m-2.25-1.5V3m9 9H3m15.75 0a6.75 6.75 0 01-13.5 0" />
            </svg>
            <p class="text-lg font-medium mt-4">Circuits touristiques guidés</p>
        </div>
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-green-500 hover:text-white">
            <svg class="w-12 h-12 text-green-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M4 6h16M5 14h14M6 18h12" />
            </svg>
            <p class="text-lg font-medium mt-4">Réservations d'hôtels</p>
        </div>
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-yellow-500 hover:text-white">
            <svg class="w-12 h-12 text-yellow-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8m-4-4v8m-6 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <p class="text-lg font-medium mt-4">Transport sécurisé</p>
        </div>
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-red-500 hover:text-white">
            <svg class="w-12 h-12 text-red-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-4 0-6 2-6 6v4h12v-4c0-4-2-6-6-6zM4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2" />
            </svg>
            <p class="text-lg font-medium mt-4">Événements culturels</p>
        </div>
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-purple-500 hover:text-white">
            <svg class="w-12 h-12 text-purple-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <p class="text-lg font-medium mt-4">Expériences culinaires</p>
        </div>
        <div class="group bg-gray-100 p-6 rounded-lg shadow-lg flex flex-col items-center text-center transition duration-300 hover:bg-indigo-500 hover:text-white">
            <svg class="w-12 h-12 text-indigo-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m3 18V3m6 7h2a2 2 0 012 2v8a2 2 0 01-2 2h-2m-6-7h6" />
            </svg>
            <p class="text-lg font-medium mt-4">Service client 24/7</p>
        </div>
    </div>
</section>

<section id="destinations" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Destinations Populaires</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <a href="{{ route('destination.show', 'ouidah') }}" class="relative group" aria-label="Visiter Ouidah">
            <img src="../asset/R.webp" alt="Temple des Pythons à Ouidah" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Ouidah
            </div>
        </a>
        <a href="{{ route('destination.show', 'pendjari') }}" class="relative group" aria-label="Visiter le Parc de la Pendjari">
            <img src="../asset/pendjari-national-park.webp" alt="Faune du Parc de la Pendjari" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Parc de la Pendjari
            </div>
        </a>
        <a href="{{ route('destination.show', 'ganvie') }}" class="relative group col-span-2 md:col-span-1 md:row-span-2" aria-label="Visiter Ganvié">
            <img src="../asset/R (1).webp" alt="Village lacustre de Ganvié" class="w-full h-full object-cover rounded-lg transition duration-300 group-hover:scale-105" loading="lazy">
            <div ====== Past Conversations
            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-2xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Ganvié
            </div>
        </a>
        <a href="{{ route('destination.show', 'porto-novo') }}" class="

relative group" aria-label="Visiter Porto-Novo">
            <img src="../asset/R (2).webp" alt="Musée ethnographique de Porto-Novo" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Porto-Novo
            </div>
        </a>
        <a href="{{ route('destination.show', 'kota') }}" class="relative group" aria-label="Visiter les Chutes de Kota">
            <img src="../asset/large-waterfall.webp" alt="Chutes de Kota à Natitingou" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Chutes de Kota - Natitingou
            </div>
        </a>
        <a href="{{ route('destination.show', 'abomey') }}" class="relative group" aria-label="Visiter Abomey">
            <img src="../asset/private-palace-of-king.webp" alt="Palais royaux d'Abomey" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Abomey
            </div>
        </a>
        <a href="{{ route('destination.show', 'grand-popo') }}" class="relative group" aria-label="Visiter Grand-Popo">
            <img src="../asset/grand-popo.webp" alt="Plage de Grand-Popo" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Grand-Popo
            </div>
        </a>
    </div>
</section>

<section id="evenements-culturels" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Nos Événements Culturels</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="{{ route('event.show', 'vodun-days') }}" class="relative group" aria-label="Participer aux VoDun Days">
            <img src="../asset/OIP (2).webp" alt="Célébration des VoDun Days" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                VoDun Days
            </div>
        </a>
        <a href="{{ route('event.show', 'festival-musique') }}" class="relative group" aria-label="Visiter le Festival de Musique">
            <img src="../asset/OIP (3).webp" alt="Scène du Festival de Musique" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Festival de Musique
            </div>
        </a>
        <a href="{{ route('event.show', 'atelier-traditionnel') }}" class="relative group" aria-label="Participer à l'Atelier Traditionnel">
            <img src="../asset/IMG-20240412-WA0145.webp" alt="Atelier d'artisanat traditionnel" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Atelier Traditionnel et Exposition d'Art Contemporain
            </div>
        </a>
        <a href="{{ route('event.show', 'festival-masques') }}" class="relative group" aria-label="Participer au Festival des Masques">
            <img src="../asset/4.webp" alt="Festival des Masques à Porto-Novo" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Festival des Masques à Porto-Novo
            </div>
        </a>
        <a href="{{ route('event.show', 'fete-igname') }}" class="relative group" aria-label="Participer à la Fête de l'Igname">
            <img src="../asset/savalou.webp" alt="Fête de l'Igname à Savalou" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Fête de l'Igname à Savalou
            </div>
        </a>
        <a href="{{ route('event.show', 'fete-independance') }}" class="relative group" aria-label="Célébrer la Fête de l'Indépendance">
            <img src="../asset/OIP.webp" alt="Fête de l'Indépendance du Bénin" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Fête de l'Indépendance du Bénin
            </div>
        </a>
    </div>
</section>

<section id="forfaits" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Offres Spéciales</h2>
    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/ChatGPT Image 1 avr. 2025, 10_21_37.webp" alt="Circuit dans la nature sauvage du Bénin" class="w-full h-48 object-cover" loading="lazy">
            <div class="p-6">
                <h3 class="text-xl font-bold">Forfait Aventure</h3>
                <p class="text-gray-600">Découvrez la nature sauvage avec nos circuits guidés.</p>
                <div class="mt-4 text-sm text-gray-500">
                    <p><strong>Durée:</strong> 5 jours</p>
                    <p><strong>Participants:</strong> 4-10 personnes</p>
                    <p><strong>Prix:</strong> 500 000 FCFA</p>
                </div>
                <button class="mt-4 text-blue-500 hover:text-blue-700" onclick="toggleDescription('desc1')" aria-expanded="false" aria-controls="desc1">Voir plus</button>
                <p id="desc1" class="mt-2 text-gray-700 hidden">Venez explorer les forêts tropicales, les rivières et les paysages à couper le souffle. Nos guides locaux vous feront découvrir des lieux secrets tout en vous partageant la richesse de la faune et la flore locales.</p>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/OIP (1).webp" alt="Visite culturelle au Bénin" class="w-full h-48 object-cover" loading="lazy">
            <div class="p-6">
                <h3 class="text-xl font-bold">Forfait Culture</h3>
                <p class="text-gray-600">Plongez dans l'histoire et la culture béninoise.</p>
                <div class="mt-4 text-sm text-gray-500">
                    <p><strong>Durée:</strong> 4 jours</p>
                    <p><strong>Participants:</strong> 2-8 personnes</p>
                    <p><strong>Prix:</strong> 300 000 FCFA</p>
                </div>
                <button class="mt-4 text-blue-500 hover:text-blue-700" onclick="toggleDescription('desc2')" aria-expanded="false" aria-controls="desc2">Voir plus</button>
                <p id="desc2" class="mt-2 text-gray-700 hidden">Visitez les sites historiques emblématiques tels que le Palais Royal d'Abomey, les temples vaudous, et découvrez les coutumes ancestrales du Bénin à travers des ateliers traditionnels et des rencontres avec les artisans locaux.</p>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/grand-popo.webp" alt="Plage relaxante à Grand-Popo" class="w-full h-48 object-cover" loading="lazy">
            <div class="p-6">
                <h3 class="text-xl font-bold">Forfait Détente</h3>
                <p class="text-gray-600">Profitez des plages et des spas pour un séjour relaxant.</p>
                <div class="mt-4 text-sm text-gray-500">
                    <p><strong>Durée:</strong> 6 jours</p>
                    <p><strong>Participants:</strong> 2-6 personnes</p>
                    <p><strong>Prix:</strong> 450 000 FCFA</p>
                </div>
                <button class="mt-4 text-blue-500 hover:text-blue-700" onclick="toggleDescription('desc3')" aria-expanded="false" aria-controls="desc3">Voir plus</button>
                <p id="desc3" class="mt-2 text-gray-700 hidden">Détendez-vous sur les plages paradisiaques du Bénin, offrez-vous des soins au spa et découvrez la cuisine locale dans un cadre paisible. Ce forfait est conçu pour ceux qui cherchent à se ressourcer et à profiter du bien-être.</p>
            </div>
        </div>
    </div>
</section>

<section id="etapes" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Les 3 Grandes Étapes</h2>
    <div class="grid md:grid-cols-3 gap-6 text-center">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A2 2 0 013 15.382V8.618a2 2 0 011.553-1.894L9 4m0 16l5.447 2.724A2 2 0 0015 19.382V12m-6 8V4m6 8l5.447 2.724A2 2 0 0121 15.382V8.618a2 2 0 00-1.553-1.894L15 4m0 8V4"/>
            </svg>
            <h3 class="text-xl font-bold">1. Choisissez votre Destination</h3>
            <p class="text-gray-600">Parcourez nos offres et sélectionnez l'expérience qui vous convient.</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <svg class="w-12 h-12 text-green-500 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.5 0 2.75-1.25 2.75-2.75S13.5 2.5 12 2.5 9.25 3.75 9.25 5.25 10.5 8 12 8zM5 21v-5.5C5 13.57 7.57 11 10.5 11h3c2.93 0 5.5 2.57 5.5 5.5V21"/>
            </svg>
            <h3 class="text-xl font-bold">2. Réservez en Ligne</h3>
            <p class="text-gray-600">Effectuez votre réservation en toute sécurité grâce à notre plateforme.</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <svg class="w-12 h-12 text-yellow-500 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14.5a2.5 2.5 0 002.5-2.5h-5a2.5 2.5 0 002.5 2.5zm0 0v4m-4-4h8"/>
            </svg>
            <h3 class="text-xl font-bold">3. Profitez de votre Séjour</h3>
            <p class="text-gray-600">Vivez une aventure inoubliable avec nos guides expérimentés.</p>
        </div>
    </div>
</section>

<section id="agences" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Agences et Guides Touristiques</h2>
    <p class="text-center text-gray-600 mb-8">Découvrez les meilleures agences et guides pour vous accompagner dans votre voyage.</p>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/13.webp" alt="Circuit avec Voyage Bénin Tour" class="w-full h-48 object-cover" loading="lazy">
            <div class="p-6 text-center">
                <h3 class="text-xl font-bold text-gray-900">Voyage Bénin Tour</h3>
                <p class="text-gray-600 text-sm mb-4">Agence spécialisée en circuits authentiques au Bénin.</p>
                <div class="flex justify-center space-x-4">
                    <a href="https://facebook.com/voyagebenintour" class="text-blue-500 hover:text-blue-700" aria-label="Page Facebook de Voyage Bénin Tour"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://twitter.com/voyagebenintour" class="text-blue-400 hover:text-blue-600" aria-label="Compte Twitter de Voyage Bénin Tour"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="https://instagram.com/voyagebenintour" class="text-red-500 hover:text-red-700" aria-label="Compte Instagram de Voyage Bénin Tour"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/9.webp" alt="Voyage avec Bénin Découverte" class="w-full h-48 object-cover" loading="lazy">
            <div class="p-6 text-center">
                <h3 class="text-xl font-bold text-gray-900">Bénin Découverte</h3>
                <p class="text-gray-600 text-sm mb-4">Des voyages sur mesure pour une immersion culturelle unique.</p>
                <div class="flex justify-center space-x-4">
                    <a href="https://facebook.com/benindecouverte" class="text-blue-500 hover:text-blue-700" aria-label="Page Facebook de Bénin Découverte"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://twitter.com/benindecouverte" class="text-blue-400 hover:text-blue-600" aria-label="Compte Twitter de Bénin Découverte"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="https://instagram.com/benindecouverte" class="text-red-500 hover:text-red-700" aria-label="Compte Instagram de Bénin Découverte"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/10.webp" alt="Exploration avec ExploBénin" class="w-full h-48 object-cover" loading="lazy">
            <div class="p-6 text-center">
                <h3 class="text-xl font-bold text-gray-900">ExploBénin</h3>
                <p class="text-gray-600 text-sm mb-4">Explorez le Bénin avec nos guides expérimentés.</p>
                <div class="flex justify-center space-x-4">
                    <a href="https://facebook.com/explobenin" class="text-blue-500 hover:text-blue-700" aria-label="Page Facebook d'ExploBénin"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://twitter.com/explobenin" class="text-blue-400 hover:text-blue-600" aria-label="Compte Twitter d'ExploBénin"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="https://instagram.com/explobenin" class="text-red-500 hover:text-red-700" aria-label="Compte Instagram d'ExploBénin"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Témoignages</h2>
    <p class="text-center text-lg text-gray-600 mb-12">Ce que disent nos clients !</p>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center mb-4">
                <img src="../asset/11.webp" alt="Photo de Jean Dupont" class="w-12 h-12 rounded-full mr-4" loading="lazy">
                <div>
                    <p class="text-lg font-semibold text-gray-900">Jean Dupont</p>
                    <p class="text-sm text-gray-500">Client fidèle</p>
                </div>
            </div>
            <p class="text-gray-700 italic">"Une expérience incroyable ! Les visites étaient bien organisées et les guides étaient vraiment sympathiques. Je recommande à 100%!"</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center mb-4">
                <img src="../asset/grown-up-3051074_1280.webp" alt="Photo de Marie Lemoine" class="w-12 h-12 rounded-full mr-4" loading="lazy">
                <div>
                    <p class="text-lg font-semibold text-gray-900">Marie Lemoine</p>
                    <p class="text-sm text-gray-500">Voyageuse satisfaite</p>
                </div>
            </div>
            <p class="text-gray-700 italic">"Les lieux visités étaient à couper le souffle et la qualité des services était impeccable. Un voyage que je n'oublierai jamais!"</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center mb-4">
                <img src="../asset/12.webp" alt="Photo de Sophie Martin" class="w-12 h-12 rounded-full mr-4" loading="lazy">
                <div>
                    <p class="text-lg font-semibold text-gray-900">Sophie Martin</p>
                    <p class="text-sm text-gray-500">Exploratrice enthousiaste</p>
                </div>
            </div>
            <p class="text-gray-700 italic">"Un séjour merveilleux grâce à une équipe de guides passionnés. Tout était parfaitement organisé, du début à la fin. Merci !" </p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center mb-4">
                <img src="../asset/1517813703981.webp" alt="Photo de Lucie Dufresne" class="w-12 h-12 rounded-full mr-4" loading="lazy">
                <div>
                    <p class="text-lg font-semibold text-gray-900">Lucie Dufresne</p>
                    <p class="text-sm text-gray-500">Voyageuse satisfaite</p>
                </div>
            </div>
            <p class="text-gray-700 italic">"Une organisation impeccable et des moments inoubliables. Les activités étaient enrichissantes et divertissantes. Merci à toute l'équipe !" </p>
        </div>
    </div>
</section>


@include('partials.footer')
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>