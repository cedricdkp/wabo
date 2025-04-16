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
 <body>
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
                <a href="#connexion" class="bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700 transition-all">Connexion</a>
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


<section id="destinations" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Destinations Populaires</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Destination 1: Ouidah -->
        <div class="text-center">
            <a href="ouidah.html" class="relative group block mb-2">
                <img src="../asset/R.jpeg" alt="Ouidah" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Ouidah
                </div>
            </a>
            <div class="text-sm text-gray-700">Ouidah, berceau de la culture vaudou, offre une immersion dans l'histoire et les traditions du Bénin, avec des sites incontournables comme la Porte du Non-Retour et le musée du vaudou.</div>
        </div>

        <!-- Destination 2: Parc de la Pendjari -->
        <div class="text-center">
            <a href="pendjari.html" class="relative group block mb-2">
                <img src="../asset/pendjari-national-park.jpg" alt="Parc de la Pendjari" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Parc de la Pendjari
                </div>
            </a>
            <div class="text-sm text-gray-700">Le Parc national de la Pendjari, classé au patrimoine mondial de l'UNESCO, est un sanctuaire pour la faune sauvage africaine, avec des safaris pour observer des lions, éléphants et antilopes.</div>
        </div>

        <!-- Destination 6: Grand-Popo -->
        <div class="text-center">
            <a href="grand-popo.html" class="relative group block mb-2">
                <img src="../asset/grand-popo.png" alt="Grand-Popo" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Grand-Popo
                </div>
            </a>
            <div class="text-sm text-gray-700">Grand-Popo est une station balnéaire célèbre pour ses plages idylliques et ses activités nautiques. C'est également un endroit idéal pour observer les oiseaux migrateurs dans la réserve de faune.</div>
        </div>

        <!-- Destination centrale en grand format: Ganvié -->
        <div class="text-center lg:col-span-3">
            <a href="ganvie.html" class="relative group block mb-2">
                <img src="../asset/R (1).jpeg" alt="Ganvié" class="w-full h-64 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-2xl font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Ganvié
                </div>
            </a>
            <div class="text-sm text-gray-700">Ganvié, surnommée la "Venise de l'Afrique", est un village lacustre situé sur le lac Nokoué. Vous y découvrirez la vie locale unique sur l'eau, avec des maisons flottantes et des pêcheurs traditionnels.</div>
        </div>

        <!-- Destination 3: Porto-Novo -->
        <div class="text-center">
            <a href="porto-novo.html" class="relative group block mb-2">
                <img src="../asset/R (2).jpeg" alt="Porto-Novo" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Porto-Novo
                </div>
            </a>
            <div class="text-sm text-gray-700">Porto-Novo, capitale administrative du Bénin, est une ville pleine de culture avec ses palais royaux, le musée ethnographique et l'architecture coloniale bien préservée.</div>
        </div>

        <!-- Destination 4: Chutes de Kota - Natitingou -->
        <div class="text-center">
            <a href="kota.html" class="relative group block mb-2">
                <img src="../asset/large-waterfall.jpg" alt="Chutes de Kota - Natitingou" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Chutes de Kota - Natitingou
                </div>
            </a>
            <div class="text-sm text-gray-700">Les Chutes de Kota, près de Natitingou, sont un spectacle naturel impressionnant. Ces cascades au milieu de la forêt offrent une belle randonnée et un cadre magnifique pour les amoureux de la nature.</div>
        </div>

        <!-- Destination 5: Abomey -->
        <div class="text-center">
            <a href="abomey.html" class="relative group block mb-2">
                <img src="../asset/private-palace-of-king.jpg" alt="Abomey" class="w-full h-48 object-cover rounded-lg transition duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition duration-300">
                    Abomey
                </div>
            </a>
            <div class="text-sm text-gray-700">Abomey, ancienne capitale du royaume du Dahomey, est un site historique majeur avec ses palais royaux classés au patrimoine mondial de l'UNESCO et son riche héritage culturel et architectural.</div>
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
