<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Plateforme Touristique</title>
    <script src="https://cdn.tailwindcss.com"></script>


    <style>
        .bg-benin {
            background-image: url('../asset/ChatGPT Image 31 mars 2025, 15_31_20.png'); /* Remplacez par le chemin de votre image */
            background-size: cover;
            background-position: center;
        }
    </style>


</head>
<body class="bg-gray-100">
<header id="accueil" class="relative bg-benin bg-cover bg-center min-h-screen flex flex-col justify-center text-white">
    <!-- Superposition sombre pour améliorer la lisibilité -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

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

    <!-- Contenu principal -->
    <div class="container mx-auto px-6 relative z-10 text-center mt-32">
        <h2 class="text-4xl font-bold">Découvrez le Bénin autrement</h2>
        <p class="mt-4 text-lg">Explorez des sites exceptionnels, assistez à des événements culturels inoubliables et trouvez l'hébergement parfait.</p>
        
        <!-- Barre de recherche améliorée -->
        <div class="flex items-center border border-gray-300 rounded-full overflow-hidden mt-6 max-w-lg mx-auto bg-white">
            <input type="text" placeholder="Rechercher un site ou un événement..." class="px-4 py-2 w-full border-none outline-none text-black">
            <button class="bg-green-600 text-white px-6 py-2 rounded-full hover:bg-green-700 transition-all ml-2">Rechercher</button>
        </div>
    </div>
</header>


<script>
    // Détecter quand la page est scrollée
    window.onscroll = function() {
        var navbar = document.getElementById("navbar");
        var navLinks = document.getElementById("nav-list");

        if (window.scrollY > 0) {
            navbar.classList.add("bg-black", "text-white");  // Ajoute le fond noir et texte blanc
            navLinks.querySelectorAll('a').forEach(function(link) {
                link.classList.remove("text-white");
                link.classList.add("text-black");  // Changer les liens en noir
            });
        } else {
            navbar.classList.remove("bg-black", "text-white");  // Retirer les styles ajoutés
            navLinks.querySelectorAll('a').forEach(function(link) {
                link.classList.remove("text-black");
                link.classList.add("text-white");  // Réinitialiser la couleur du texte en blanc
            });
        }
    };

    window.addEventListener("scroll", function() {
        const navbar = document.getElementById("navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("bg-white", "shadow-lg", "py-3");
            navbar.classList.remove("py-4");
        } else {
            navbar.classList.remove("bg-white", "shadow-lg", "py-3");
            navbar.classList.add("py-4");
        }
    });
</script>

<section id="objectif" class="container mx-auto px-6 py-12 flex flex-col md:flex-row items-center justify-between">
    <!-- Section image -->
    <div class="w-full md:w-1/2 flex justify-center">
        <img src="../asset/ChatGPT Image 31 mars 2025, 16_52_17.png" alt="Objectif de la plateforme" class="w-full md:w-10/12 rounded-lg shadow-xl transform hover:scale-105 transition-all duration-300">
    </div>

    <!-- Section texte -->
    <div class="w-full md:w-1/2 md:pl-8">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-4 text-center md:text-left">À propos de nous</h2>
        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center md:text-left">
            Nous facilitons la découverte du Bénin en offrant aux voyageurs des expériences authentiques avec les meilleures agences et guides locaux. De plus, vivez la culture béninoise à travers des festivals, des expositions d'art, et des ateliers traditionnels. Explorez notre large gamme de services pour une immersion totale dans la culture béninoise.
        </p>

        <!-- Disposition en colonnes -->
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


<section id="destinations" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Destinations Populaires</h2>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Destination 1 -->
        <a href="ouidah.html" class="relative group">
            <img src="../asset/R.jpeg" alt="Ouidah" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Ouidah
            </div>
        </a>

        <!-- Destination 2 -->
        <a href="pendjari.html" class="relative group">
            <img src="../asset/pendjari-national-park.jpg" alt="Parc de la Pendjari" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Parc de la Pendjari
            </div>
        </a>

        <!-- Destination centrale en grand format -->
        <a href="ganvie.html" class="relative group col-span-2 md:col-span-1 md:row-span-2">
            <img src="../asset/R (1).jpeg" alt="Ganvié" class="w-full h-full object-cover rounded-lg transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-2xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Ganvié
            </div>
        </a>

        <!-- Destination 3 -->
        <a href="porto-novo.html" class="relative group">
            <img src="../asset/R (2).jpeg" alt="Porto-Novo" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Porto-Novo
            </div>
        </a>

        <!-- Destination 4 -->
        <a href="kota.html" class="relative group">
            <img src="../asset/large-waterfall.jpg" alt="Chutes de Kota - Natitingou" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Chutes de Kota - Natitingou
            </div>
        </a>

        <!-- Destination 5 -->
        <a href="abomey.html" class="relative group">
            <img src="../asset/private-palace-of-king.jpg" alt="Abomey" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Abomey
            </div>
        </a>

        <!-- Destination 6 -->
        <a href="grand-popo.html" class="relative group">
            <img src="../asset/grand-popo.png" alt="Grand-Popo" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Grand-Popo
            </div>
        </a>
    </div>
</section>



<section id="evenements-culturels" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Nos Événements Culturels</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Événement 1 -->
        <a href="festival1.html" class="relative group">
            <img src="../asset/OIP (2).jpeg" alt="Festival 1" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                VoDun Days
            </div>
        </a>

        <!-- Événement 2 -->
        <a href="exposition1.html" class="relative group">
            <img src="../asset/OIP (3).jpeg" alt="Exposition 1" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
            Festival de Music
            </div>
        </a>

        <!-- Événement 3 -->
        <a href="atelier1.html" class="relative group">
            <img src="../asset/IMG-20240412-WA0145.jpg" alt="Atelier 1" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Atelier Traditionnel et Exposition d'Art Contemporain
            </div>
        </a>

        <!-- Événement 4 -->
        <a href="festival2.html" class="relative group">
            <img src="../asset/4.jpeg" alt="Festival 2" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Festival des Masques a Porto-Novo
            </div>
        </a>

        <!-- Événement 5 -->
        <a href="concert1.html" class="relative group">
            <img src="../asset/savalou.jpg" alt="Concert 1" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                Fête de l'igname a Savalou
            </div>
        </a>

        <!-- Événement 6 -->
        <a href="exposition2.html" class="relative group">
            <img src="../asset/OIP.jpeg" alt="Exposition 2" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
               Fête de l'Independance du Benin
            </div>
        </a>
    </div>
</section>


<section id="forfaits" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Offres Spéciales</h2>
    
    <div class="grid md:grid-cols-3 gap-6">
        <!-- Offre 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/ChatGPT Image 1 avr. 2025, 10_21_37.png" alt="Forfait Aventure" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold">Forfait Aventure</h3>
                <p class="text-gray-600">Découvrez la nature sauvage avec nos circuits guidés.</p>
                <div class="mt-4 text-sm text-gray-500">
                    <p><strong>Durée:</strong> 5 jours</p>
                    <p><strong>Participants:</strong> 4-10 personnes</p>
                    <p><strong>Prix:</strong> 500 000 FCFA</p>
                </div>
                <button class="mt-4 text-blue-500 hover:text-blue-700" onclick="toggleDescription('desc1')">Voir plus</button>
                <p id="desc1" class="mt-2 text-gray-700 hidden">Venez explorer les forêts tropicales, les rivières et les paysages à couper le souffle. Nos guides locaux vous feront découvrir des lieux secrets tout en vous partageant la richesse de la faune et la flore locales.</p>
            </div>
        </div>

        <!-- Offre 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/OIP (1).jpeg" alt="Forfait Culture" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold">Forfait Culture</h3>
                <p class="text-gray-600">Plongez dans l'histoire et la culture béninoise.</p>
                <div class="mt-4 text-sm text-gray-500">
                    <p><strong>Durée:</strong> 4 jours</p>
                    <p><strong>Participants:</strong> 2-8 personnes</p>
                    <p><strong>Prix:</strong> 300 000 FCFA</p>
                </div>
                <button class="mt-4 text-blue-500 hover:text-blue-700" onclick="toggleDescription('desc2')">Voir plus</button>
                <p id="desc2" class="mt-2 text-gray-700 hidden">Visitez les sites historiques emblématiques tels que le Palais Royal d'Abomey, les temples vaudous, et découvrez les coutumes ancestrales du Bénin à travers des ateliers traditionnels et des rencontres avec les artisans locaux.</p>
            </div>
        </div>

        <!-- Offre 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/grand-popo.png" alt="Forfait Détente" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold">Forfait Détente</h3>
                <p class="text-gray-600">Profitez des plages et des spas pour un séjour relaxant.</p>
                <div class="mt-4 text-sm text-gray-500">
                    <p><strong>Durée:</strong> 6 jours</p>
                    <p><strong>Participants:</strong> 2-6 personnes</p>
                    <p><strong>Prix:</strong> 450 000 FCFA</p>
                </div>
                <button class="mt-4 text-blue-500 hover:text-blue-700" onclick="toggleDescription('desc3')">Voir plus</button>
                <p id="desc3" class="mt-2 text-gray-700 hidden">Détendez-vous sur les plages paradisiaques du Bénin, offrez-vous des soins au spa et découvrez la cuisine locale dans un cadre paisible. Ce forfait est conçu pour ceux qui cherchent à se ressourcer et à profiter du bien-être.</p>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleDescription(id) {
        var desc = document.getElementById(id);
        if (desc.classList.contains('hidden')) {
            desc.classList.remove('hidden');
        } else {
            desc.classList.add('hidden');
        }
    }
</script>


<section id="etapes" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Les 3 Grandes Étapes</h2>
    <div class="grid md:grid-cols-3 gap-6 text-center">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A2 2 0 013 15.382V8.618a2 2 0 011.553-1.894L9 4m0 16l5.447 2.724A2 2 0 0015 19.382V12m-6 8V4m6 8l5.447 2.724A2 2 0 0121 15.382V8.618a2 2 0 00-1.553-1.894L15 4m0 8V4"/>
            </svg>
            <h3 class="text-xl font-bold">1. Choisissez votre Destination</h3>
            <p class="text-gray-600">Parcourez nos offres et sélectionnez l'expérience qui vous convient.</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <svg class="w-12 h-12 text-green-500 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.5 0 2.75-1.25 2.75-2.75S13.5 2.5 12 2.5 9.25 3.75 9.25 5.25 10.5 8 12 8zM5 21v-5.5C5 13.57 7.57 11 10.5 11h3c2.93 0 5.5 2.57 5.5 5.5V21"/>
            </svg>
            <h3 class="text-xl font-bold">2. Réservez en Ligne</h3>
            <p class="text-gray-600">Effectuez votre réservation en toute sécurité grâce à notre plateforme.</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <svg class="w-12 h-12 text-yellow-500 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
        <!-- Agence 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/13.jpg" alt="Agence 1" class="w-full h-48 object-cover">
            <div class="p-6 text-center">
                <h3 class="text-xl font-bold text-gray-900">Voyage Bénin Tour</h3>
                <p class="text-gray-600 text-sm mb-4">Agence spécialisée en circuits authentiques au Bénin.</p>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-red-500 hover:text-red-700"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </div>

        <!-- Agence 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/9.jpeg" alt="Agence 2" class="w-full h-48 object-cover">
            <div class="p-6 text-center">
                <h3 class="text-xl font-bold text-gray-900">Bénin Découverte</h3>
                <p class="text-gray-600 text-sm mb-4">Des voyages sur mesure pour une immersion culturelle unique.</p>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-red-500 hover:text-red-700"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </div>

        <!-- Agence 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="../asset/10.jpeg" alt="Agence 3" class="w-full h-48 object-cover">
            <div class="p-6 text-center">
                <h3 class="text-xl font-bold text-gray-900">ExploBénin</h3>
                <p class="text-gray-600 text-sm mb-4">Explorez le Bénin avec nos guides expérimentés.</p>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-blue-500 hover:text-blue-700"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-red-500 hover:text-red-700"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Testimonial</h2>
    <p class="text-center text-lg text-gray-600 mb-12">Our Clients Say!!!</p>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        
        <!-- Testimonial 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center mb-4">
                <img src="../asset/11.jpeg" alt="Client 1" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <p class="text-lg font-semibold text-gray-900">Jean Dupont</p>
                    <p class="text-sm text-gray-500">Client fidèle</p>
                </div>
            </div>
            <p class="text-gray-700 italic">"Une expérience incroyable ! Les visites étaient bien organisées et les guides étaient vraiment sympathiques. Je recommande à 100%!"</p>
        </div>

        <!-- Testimonial 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center mb-4">
                <img src="../asset/grown-up-3051074_1280.jpg" alt="Client 2" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <p class="text-lg font-semibold text-gray-900">Marie Lemoine</p>
                    <p class="text-sm text-gray-500">Voyageuse satisfaite</p>
                </div>
            </div>
            <p class="text-gray-700 italic">"Les lieux visités étaient à couper le souffle et la qualité des services était impeccable. Un voyage que je n'oublierai jamais!"</p>
        </div>

        <!-- Testimonial 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center mb-4">
                <img src="../asset/12.jpeg" alt="Client 3" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <p class="text-lg font-semibold text-gray-900">Sophie Martin</p>
                    <p class="text-sm text-gray-500">Exploratrice enthousiaste</p>
                </div>
            </div>
            <p class="text-gray-700 italic">"Un séjour merveilleux grâce à une équipe de guides passionnés. Tout était parfaitement organisé, du début à la fin. Merci !" </p>
        </div>

        <!-- Testimonial 4 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex items-center mb-4">
                <img src="../asset/1517813703981.jpeg" alt="Client 4" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <p class="text-lg font-semibold text-gray-900">Lucie Dufresne</p>
                    <p class="text-sm text-gray-500">Voyageuse satisfaite</p>
                </div>
            </div>
            <p class="text-gray-700 italic">"Une organisation impeccable et des moments inoubliables. Les activités étaient enrichissantes et divertissantes. Merci à toute l'équipe !" </p>
        </div>

    </div>
</section>



<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Section 1: Menu -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Menu</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#accueil" class="hover:text-green-500">Accueil</a></li>
                    <li><a href="#visites" class="hover:text-green-500">Visites</a></li>
                    <li><a href="#evenements" class="hover:text-green-500">Événements</a></li>
                    <li><a href="#agences" class="hover:text-green-500">Agences</a></li>
                    <li><a href="#avis" class="hover:text-green-500">Avis</a></li>
                </ul>
            </div>

            <!-- Section 2: Contact -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="tel:+01234567890" class="hover:text-green-500">+012 345 67890</a></li>
                    <li><a href="mailto:info@example.com" class="hover:text-green-500">info@example.com</a></li>
                    <li><a href="https://maps.google.com" class="hover:text-green-500">Voir sur Google Maps</a></li>
                </ul>
            </div>

            <!-- Section 3: Galerie -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Galerie</h3>
                <div class="grid grid-cols-2 gap-2">
                    <img src="../asset/ccimage-shutterstock_1383820007.jpg" alt="Image 1" class="w-full h-auto object-cover rounded-lg">
                    <img src="../asset/OIP (4).jpeg" alt="Image 2" class="w-full h-auto object-cover rounded-lg">
                    <img src="../asset/OIP (6).jpeg" alt="Image 3" class="w-full h-auto object-cover rounded-lg">
                    <img src="../asset/OIP (7).jpeg" alt="Image 4" class="w-full h-auto object-cover rounded-lg">
                </div>
            </div>

            <!-- Section 4: Newsletter -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                <p class="text-sm text-gray-400 mb-4">Recevez nos dernières offres et mises à jour.</p>
                <form action="/submit-newsletter" method="POST">
                    <input type="email" id="newsletter" name="email" class="w-full p-2 bg-gray-700 text-white placeholder-gray-400 rounded-lg mb-4" placeholder="Votre email" required>
                    <button type="submit" class="w-full py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">S'abonner</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="bg-gray-900 py-4 mt-8 text-center text-gray-400">
        <p class="text-sm">&copy; 2025 VotreSite. Tous droits réservés.</p>
        <div class="flex justify-center space-x-4 mt-2 text-sm">
            <a href="#" class="hover:text-green-500">Accueil</a>
            <a href="#" class="hover:text-green-500">Cookies</a>
            <a href="#" class="hover:text-green-500">Aide</a>
            <a href="#" class="hover:text-green-500">FAQ</a>
        </div>
    </div>
</footer>

</body>
</html>
