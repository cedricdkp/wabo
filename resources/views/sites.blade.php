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
        <h2 class="text-4xl font-bold">Découvrez nos sites touristiques exceptionnels pour une aventure inoubliable !</h2>
        <p class="mt-4 text-lg">Embarquez pour un voyage à travers le temps et l'histoire avec notre sélection exclusive de sites touristiques. Des monuments historiques aux paysages naturels époustouflants, chaque destination est une invitation à la découverte et à l'émerveillement. Que vous soyez un passionné de culture ou un amoureux de la nature, nos sites touristiques vous offrent des expériences uniques et enrichissantes. Réservez dès maintenant et laissez-vous envoûter par la beauté et la richesse de ces lieux emblématiques.</p>
    </div>
</header>
<section id="destinations" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Destinations Populaires</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Destination 1: Ouidah -->
        <div class="text-center">
            <a href="ouidah.html" class="relative group block mb-2">
                <img src="../asset/R.webp" alt="Ouidah" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Ouidah
                </div>
            </a>
            <div class="text-sm text-gray-700">Ouidah, berceau de la culture vaudou, offre une immersion dans l'histoire et les traditions du Bénin, avec des sites incontournables comme la Porte du Non-Retour et le musée du vaudou.</div>
        </div>

        <!-- Destination 2: Parc de la Pendjari -->
        <div class="text-center">
            <a href="pendjari.html" class="relative group block mb-2">
                <img src="../asset/pendjari-national-park.webp" alt="Parc de la Pendjari" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Parc de la Pendjari
                </div>
            </a>
            <div class="text-sm text-gray-700">Le Parc national de la Pendjari, classé au patrimoine mondial de l'UNESCO, est un sanctuaire pour la faune sauvage africaine, avec des safaris pour observer des lions, éléphants et antilopes.</div>
        </div>

        <!-- Destination 6: Grand-Popo -->
        <div class="text-center">
            <a href="grand-popo.html" class="relative group block mb-2">
                <img src="../asset/grand-popo.webp" alt="Grand-Popo" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Grand-Popo
                </div>
            </a>
            <div class="text-sm text-gray-700">Grand-Popo est une station balnéaire célèbre pour ses plages idylliques et ses activités nautiques. C'est également un endroit idéal pour observer les oiseaux migrateurs dans la réserve de faune.</div>
        </div>

        <!-- Destination centrale en grand format: Ganvié -->
        <div class="text-center lg:col-span-3">
            <a href="ganvie.html" class="relative group block mb-2">
                <img src="../asset/R (1).webp" alt="Ganvié" class="w-full h-64 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-2xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Ganvié
                </div>
            </a>
            <div class="text-sm text-gray-700">Ganvié, surnommée la "Venise de l'Afrique", est un village lacustre situé sur le lac Nokoué. Vous y découvrirez la vie locale unique sur l'eau, avec des maisons flottantes et des pêcheurs traditionnels.</div>
        </div>

        <!-- Destination 3: Porto-Novo -->
        <div class="text-center">
            <a href="porto-novo.html" class="relative group block mb-2">
                <img src="../asset/R (2).webp" alt="Porto-Novo" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Porto-Novo
                </div>
            </a>
            <div class="text-sm text-gray-700">Porto-Novo, capitale administrative du Bénin, est une ville pleine de culture avec ses palais royaux, le musée ethnographique et l'architecture coloniale bien préservée.</div>
        </div>

        <!-- Destination 4: Chutes de Kota - Natitingou -->
        <div class="text-center">
            <a href="kota.html" class="relative group block mb-2">
                <img src="../asset/large-waterfall.webp" alt="Chutes de Kota - Natitingou" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Chutes de Kota - Natitingou
                </div>
            </a>
            <div class="text-sm text-gray-700">Les Chutes de Kota, près de Natitingou, sont un spectacle naturel impressionnant. Ces cascades au milieu de la forêt offrent une belle randonnée et un cadre magnifique pour les amoureux de la nature.</div>
        </div>

        <!-- Destination 5: Abomey -->
        <div class="text-center">
            <a href="abomey.html" class="relative group block mb-2">
                <img src="../asset/private-palace-of-king.webp" alt="Abomey" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Abomey
                </div>
            </a>
            <div class="text-sm text-gray-700">Abomey, ancienne capitale du royaume du Dahomey, est un site historique majeur avec ses palais royaux classés au patrimoine mondial de l'UNESCO et son riche héritage culturel et architectural.</div>
        </div>
    </div>
</section>

@include('partials.footer')
<script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>













  

