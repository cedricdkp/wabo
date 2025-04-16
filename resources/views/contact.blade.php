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
        <h2 class="text-4xl font-bold">Contactez-nous</h2>
        <p class="mt-4 text-lg">Une question ? Besoin d'informations ? Remplissez le formulaire ci-dessous ou contactez-nous directement.</p>
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




 <!-- Section Contact -->
<div class="container mx-auto px-6 py-12 grid md:grid-cols-2 gap-8">
    <!-- Colonne Informations -->
    <div class="relative py-16 bg-cover bg-center flex flex-col justify-center p-6 rounded-lg shadow-lg" 
        style="background-image: url('../asset/3.jpeg');">
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
