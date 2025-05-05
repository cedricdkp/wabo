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
                    <img src="../asset/ccimage-shutterstock_1383820007.webp" alt="Paysage du Bénin" class="w-full h-auto object-cover rounded-lg" loading="lazy">
                    <img src="../asset/OIP (4).webp" alt="Culture béninoise" class="w-full h-auto object-cover rounded-lg" loading="lazy">
                    <img src="../asset/OIP (6).webp" alt="Artisanat local" class="w-full h-auto object-cover rounded-lg" loading="lazy">
                    <img src="../asset/OIP (7).webp" alt="Festival au Bénin" class="w-full h-auto object-cover rounded-lg" loading="lazy">
                </div>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                <p class="text-sm text-gray-400 mb-4">Recevez nos dernières offres et mises à jour.</p>
                <div class="space-y-4">
                    <form action="{{ route('newsletter.subscribe') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="email" id="newsletter" name="email" class="w-full p-2 bg-gray-700 text-white placeholder-gray-400 rounded-lg" placeholder="Votre email" required>
                        <button type="submit" class="w-full py-2 bg-green-500 text-white rounded-lg hover:bg-green-600" onclick="alert('Abonnement soumis ! Connectez ce bouton à votre backend.')">S'abonner</button>
                    </form>
                    @if (session('success'))
                        <p class="text-green-400 mt-2">{{ session('success') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-900 py-4 mt-8 text-center text-gray-400">
        <p class="text-sm">© 2025 Tourisme Bénin. Tous droits réservés.</p>
        <div class="flex justify-center space-x-4 mt-2 text-sm">
            <a href="{{ route('accueil') }}" class="hover:text-green-500">Accueil</a>
            <a href="#cookiessono" class="hover:text-green-500">Cookies</a>
            <a href="#aide" class="hover:text-green-500">Aide</a>
            <a href="#faq" class="hover:text-green-500">FAQ</a>
        </div>
    </div>
</footer>
