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



<section id="evenements-culturels" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Nos Événements Culturels Populaires</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Événement 1 : VoDun Days -->
        <div>
            <a href="festival1.html" class="relative group">
                <img src="../asset/OIP (2).jpeg" alt="VoDun Days" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
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
                <img src="../asset/OIP (3).jpeg" alt="Festival de Musique" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
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
                <img src="../asset/IMG-20240412-WA0145.jpg" alt="Atelier Traditionnel et Exposition d'Art Contemporain" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
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
                <img src="../asset/4.jpeg" alt="Festival des Masques à Porto-Novo" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
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
                <img src="../asset/savalou.jpg" alt="Fête de l'Igname à Savalou" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
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
                <img src="../asset/OIP.jpeg" alt="Fête de l'Indépendance du Bénin" class="w-full h-48 object-cover rounded-lg shadow-md transition duration-300 group-hover:scale-105">
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
