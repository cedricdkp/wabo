<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Tourisme Bénin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="../asset/favicon.png">
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-green-500">Tourisme Bénin</h1>
                <div class="flex items-center">
                    <ul class="hidden md:flex items-center space-x-6">
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
    </header>

    <main class="container mx-auto px-6 py-12">
        <section class="bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center">{{ $title }}</h1>
            <img src="{{ $image }}" alt="{{ $alt }}" class="w-full h-auto object-cover rounded-lg mb-6" loading="lazy">
            <p class="text-lg text-gray-700 leading-relaxed">{{ $description }}</p>
            <a href="{{ route('accueil') }}" class="mt-6 inline-block bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700 transition-all">Retour à l'accueil</a>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Menu</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('accueil') }}" class="hover:text-green-500">Accueil</a></li>
                        <li><a href="{{ route('sites') }}" class="hover:text-green-500">Sites Touristiques</a></li>
                        <li><a href="{{ route('evenements') }}" class="hover:text-green-500">Événements</a></li>
                        <li><a href="#agences" class="hover:text-green-500">Agences</a></li>
                        <li><a href="#testimonials" class="hover:text-green-500">Témoignages</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="tel:+22912345678" class="hover:text-green-500">+229 1234 5678</a></li>
                        <li><a href="mailto:contact@tourismebenin.com" class="hover:text-green-500">contact@tourismebenin.com</a></li>
                        <li><a href="https://maps.google.com/?q=Cotonou,Benin" class="hover:text-green-500" target="_blank">Voir sur Google Maps</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Galerie</h3>
                    <div class="grid grid-cols-2 gap-2">
                        <img src="../asset/ccimage-shutterstock_1383820007.jpg" alt="Paysage du Bénin" class="w-full h-auto object-cover rounded-lg" loading="lazy">
                        <img src="../asset/OIP (4).jpeg" alt="Culture béninoise" class="w-full h-auto object-cover rounded-lg" loading="lazy">
                        <img src="../asset/OIP (6).jpeg" alt="Artisanat local" class="w-full h-auto object-cover rounded-lg" loading="lazy">
                        <img src="../asset/OIP (7).jpeg" alt="Festival au Bénin" class="w-full h-auto object-cover rounded-lg" loading="lazy">
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                    <p class="text-sm text-gray-400 mb-4">Recevez nos dernières offres et mises à jour.</p>
                    <div class="space-y-4">
                        <input type="email" id="newsletter" name="email" class="w-full p-2 bg-gray-700 text-white placeholder-gray-400 rounded-lg" placeholder="Votre email" required>
                        <button type="submit" class="w-full py-2 bg-green-500 text-white rounded-lg hover:bg-green-700" onclick="alert('Abonnement soumis ! Connectez ce bouton à votre backend.')">S'abonner</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-900 py-4 mt-8 text-center text-gray-400">
            <p class="text-sm">© 2025 Tourisme Bénin. Tous droits réservés.</p>
            <div class="flex justify-center space-x-4 mt-2 text-sm">
                <a href="{{ route('accueil') }}" class="hover:text-green-500">Accueil</a>
                <a href="#cookies" class="hover:text-green-500">Cookies</a>
                <a href="#aide" class="hover:text-green-500">Aide</a>
                <a href="#faq" class="hover:text-green-500">FAQ</a>
            </div>
        </div>
    </footer>

    <script>
        const menuToggle = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");
        menuToggle.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
            const isExpanded = !mobileMenu.classList.contains("hidden");
            menuToggle.setAttribute("aria-expanded", isExpanded);
            menuToggle.querySelector("i").classList.toggle("fa-bars");
            menuToggle.querySelector("i").classList.toggle("fa-times");
        });
    </script>
</body>
</html>