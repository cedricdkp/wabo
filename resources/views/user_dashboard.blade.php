<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans flex min-h-screen">

    <!-- Barre de navigation verticale -->
    <nav class="bg-green-700 text-white w-64 p-12 shadow-md flex flex-col">
        
        <h1 class="text-2xl font-bold mb-8 text-white">Tableau de Bord</h1>
        <button class="text-white hover:text-gray-300 mb-4 w-full text-left" onclick="location.href='reservations.html'">Acceuil</button>
        <button class="text-white hover:text-gray-300 mb-4 w-full text-left" onclick="location.href='history.html'">Historiques</button>
        <button class="text-white hover:text-gray-300 mb-4 w-full text-left" onclick="location.href='statistics.html'">Statistiques</button>
        <button class="text-white hover:text-gray-300 mb-4 w-full text-left" onclick="location.href='profile.html'">Profil</button>
        <button class="text-white hover:text-gray-300 mb-4 w-full text-left" onclick="location.href='reviews.html'">Avis</button>
        <button class="bg-white text-green-700 px-4 py-2 rounded transition mb-6 hover:bg-gray-200" aria-label="Déconnexion">
            Déconnexion
        </button>
    </nav>

    <!-- Contenu principal -->
    <div class="flex-grow p-6">
        <div class="mb-8 p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Découvrez le Bénin</h2>
            <p class="text-gray-700 mb-4">
                Explorez les merveilles du Bénin à travers ses sites touristiques emblématiques et ses événements culturels vibrants.
                Que vous soyez passionné par la nature ou la culture, le Bénin a quelque chose à offrir à chacun.
            </p>
            <div class="flex space-x-4">
                <button class="flex-1 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition" onclick="openReservationForm('site')" aria-label="Réserver un Site Touristique">
                    Réserver un Site Touristique
                </button>
                <button class="flex-1 bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded transition" onclick="openReservationForm('event')" aria-label="Réserver un Événement">
                    Réserver un Événement
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2  gap-6">
            <!-- Section Sites Touristiques -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-3">Sites Touristiques</h2>
                <div class="space-y-4">
                    <div class="p-4 border rounded bg-gray-50 flex items-center">
                        <img src="https://via.placeholder.com/100" alt="Parc National de la Pendjari" class="rounded-lg mr-4">
                        <div>
                            <p class="font-semibold">Parc National de la Pendjari</p>
                            <p class="text-gray-700"><strong>Lieu :</strong> Nord Bénin</p>
                            <button class="mt-2 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition" onclick="openReservationForm('site')" aria-label="Réserver">
                                Réserver
                            </button>
                        </div>
                    </div>
                    <div class="p-4 border rounded bg-gray-50 flex items-center">
                        <img src="https://via.placeholder.com/100" alt="Palais Royal d'Abomey" class="rounded-lg mr-4">
                        <div>
                            <p class="font-semibold">Palais Royal d'Abomey</p>
                            <p class="text-gray-700"><strong>Lieu :</strong> Abomey</p>
                            <button class="mt-2 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition" onclick="openReservationForm('site')" aria-label="Réserver">
                                Réserver
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Événements Culturels -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-3">Événements Culturels</h2>
                <div class="space-y-4">
                    <div class="p-4 border rounded bg-gray-50 flex items-center">
                        <img src="https://via.placeholder.com/100" alt="Festival International de Théâtre du Bénin" class="rounded-lg mr-4">
                        <div>
                            <p class="font-semibold">Festival International de Théâtre du Bénin</p>
                            <p class="text-gray-700"><strong>Date :</strong> Novembre</p>
                            <p class="text-gray-700"><strong>Lieu :</strong> Cotonou</p>
                            <button class="mt-2 bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded transition" onclick="openReservationForm('event')" aria-label="Réserver">
                                Réserver
                            </button>
                        </div>
                    </div>
                    <div class="p-4 border rounded bg-gray-50 flex items-center">
                        <img src="https://via.placeholder.com/100" alt="Fête du Vaudou" class="rounded-lg mr-4">
                        <div>
                            <p class="font-semibold">Fête du Vaudou</p>
                            <p class="text-gray-700"><strong>Date :</strong> 10 Janvier</p>
                            <p class="text-gray-700"><strong>Lieu :</strong> Ouidah</p>
                            <button class="mt-2 bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded transition" onclick="openReservationForm('event')" aria-label="Réserver">
                                Réserver
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mt-8">
            <!-- Offre 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Forfait Aventure" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold">Forfait Aventure</h3>
                    <p class="text-gray-600">Découvrez la nature sauvage avec nos circuits guidés.</p>
                    <div class="mt-4 text-sm text-gray-500">
                        <p><strong>Durée:</strong> 5 jours</p>
                        <p><strong>Participants:</strong> 4-10 personnes</p>
                        <p><strong>Prix:</strong> 500 000 FCFA</p>
                        <p><strong>Hébergement:</strong> Gratuit</p>
                    </div>
                    <button class="mt-4 text-blue-500 hover:text-blue-700" onclick="toggleDescription('desc1')">Voir plus</button>
                    <p id="desc1" class="mt-2 text-gray-700 hidden">Venez explorer les forêts tropicales, les rivières et les paysages à couper le souffle. Nos guides locaux vous feront découvrir des lieux secrets tout en vous partageant la richesse de la faune et la flore locales. L'hébergement est inclus dans ce forfait.</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition" onclick="openReservationForm('forfait')" aria-label="Réserver">
                        Réserver
                    </button>
                </div>
            </div>

            <!-- Offre 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Forfait Culture" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold">Forfait Culture</h3>
                    <p class="text-gray-600">Plongez dans l'histoire et la culture béninoise.</p>
                    <div class="mt-4 text-sm text-gray-500">
                        <p><strong>Durée:</strong> 4 jours</p>
                        <p><strong>Participants:</strong> 2-8 personnes</p>
                        <p><strong>Prix:</strong> 300 000 FCFA</p>
                        <p><strong>Hébergement:</strong> Gratuit</p>
                    </div>
                    <button class="mt-4 text-blue-500 hover:text-blue-700" onclick="toggleDescription('desc2')">Voir plus</button>
                    <p id="desc2" class="mt-2 text-gray-700 hidden">Visitez les sites historiques emblématiques tels que le Palais Royal d'Abomey, les temples vaudous, et découvrez les coutumes ancestrales du Bénin à travers des ateliers traditionnels et des rencontres avec les artisans locaux. L'hébergement est inclus dans ce forfait.</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition" onclick="openReservationForm('forfait')" aria-label="Réserver">
                        Réserver
                    </button>
                </div>
            </div>

            <!-- Offre 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/300" alt="Forfait Détente" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold">Forfait Détente</h3>
                    <p class="text-gray-600">Profitez des plages et des spas pour un séjour relaxant.</p>
                    <div class="mt-4 text-sm text-gray-500">
                        <p><strong>Durée:</strong> 6 jours</p>
                        <p><strong>Participants:</strong> 2-6 personnes</p>
                        <p><strong>Prix:</strong> 450 000 FCFA</p>
                        <p><strong>Hébergement:</strong> Gratuit</p>
                    </div>
                    <button class="mt-4 text-blue-500 hover:text-blue-700" onclick="toggleDescription('desc3')">Voir plus</button>
                    <p id="desc3" class="mt-2 text-gray-700 hidden">Détendez-vous sur les plages paradisiaques du Bénin, offrez-vous des soins au spa et découvrez la cuisine locale dans un cadre paisible. Ce forfait est conçu pour ceux qui cherchent à se ressourcer et à profiter du bien-être. L'hébergement est inclus dans ce forfait.</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition" onclick="openReservationForm('forfait')" aria-label="Réserver">
                        Réserver
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de réservation -->
    <div id="reservationFormModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden flex justify-center items-center transition-opacity">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md transform scale-95 transition-transform">
            <h2 class="text-xl font-semibold mb-4">Nouvelle Réservation</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium" for="eventName">Événement/Site</label>
                    <input type="text" id="eventName" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300" placeholder="Nom de l'événement ou du site">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium" for="eventDate">Date</label>
                    <input type="date" id="eventDate" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium" for="participants">Participants</label>
                    <input type="number" id="participants" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300" placeholder="Nombre de participants">
                </div>
                <div class="flex justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition" aria-label="Réserver">
                        Réserver
                    </button>
                    <button type="button" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition" onclick="closeReservationForm()" aria-label="Annuler">
                        Annuler
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openReservationForm(type) {
            let modal = document.getElementById('reservationFormModal');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.add('opacity-100', 'scale-100');
            }, 50);
            // You can customize the form based on the type (site, event, or forfait) if needed
        }

        function closeReservationForm() {
            let modal = document.getElementById('reservationFormModal');
            modal.classList.remove('opacity-100', 'scale-100');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 200);
        }

        function toggleDescription(id) {
            let desc = document.getElementById(id);
            let button = desc.previousElementSibling;
            if (desc.classList.contains('hidden')) {
                desc.classList.remove('hidden');
                button.textContent = "Voir moins";
            } else {
                desc.classList.add('hidden');
                button.textContent = "Voir plus";
            }
        }
    </script>

</body>
</html>