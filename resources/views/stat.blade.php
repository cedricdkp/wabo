<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques et Actions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-6">
        <header class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Statistiques et Actions</h1>
            <a href="/dashboard" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Retour au Tableau de Bord</a>
        </header>


        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h2 class="text-xl font-semibold mb-4">Statistiques</h2>
            <div class="mb-6">
                <h3 class="text-lg font-medium mb-2">Réservations par Mois</h3>
                <canvas id="reservationsChart"></canvas>
            </div>
            <div>
                <h3 class="text-lg font-medium mb-2">Types d'Événements les Plus Réservés</h3>
                <p class="text-gray-700">Analyse des événements les plus populaires</p>
            </div>
        </div>

        <div class="max-w-4xl mx-auto p-6">
 

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h2 class="text-xl font-semibold mb-4">Historique des Réservations</h2>
            <h3 class="text-lg font-medium mb-2 text-gray-700">Réservations en cours</h3>
            <ul class="mb-6">
                <li class="mb-4 p-4 border rounded-lg bg-yellow-50">
                    <p><strong>Événement :</strong> Exposition d'Art</p>
                    <p><strong>Date :</strong> 5 Novembre 2023</p>
                    <p><strong>Statut :</strong> <span class="text-green-600 font-semibold">Confirmé</span></p>
                    <button class="mt-2 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 transition">Annuler</button>
                </li>
            </ul>
            <h3 class="text-lg font-medium mb-2 text-gray-700">Réservations terminées</h3>
            <ul>
                <li class="mb-4 p-4 border rounded-lg bg-gray-50">
                    <p><strong>Événement :</strong> Festival de Danse</p>
                    <p><strong>Date :</strong> 10 Septembre 2023</p>
                    <p><strong>Statut :</strong> <span class="text-gray-600 font-semibold">Terminé</span></p>
                </li>
                <li class="mb-4 p-4 border rounded-lg bg-gray-50">
                    <p><strong>Événement :</strong> Conférence sur l'Histoire</p>
                    <p><strong>Date :</strong> 22 Août 2023</p>
                    <p><strong>Statut :</strong> <span class="text-gray-600 font-semibold">Terminé</span></p>
                </li>
            </ul>
        </div>
      </div>
        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h2 class="text-xl font-semibold mb-4">Votre Appréciation</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-lg font-medium">Nom :</label>
                    <input type="text" name="nom" class="w-full p-3 border rounded-lg" placeholder="Entrez votre nom">
                </div>
                <div>
                    <label class="block text-lg font-medium">Prénom :</label>
                    <input type="text" name="prenom" class="w-full p-3 border rounded-lg" placeholder="Entrez votre prénom">
                </div>
                <div>
                    <label class="block text-lg font-medium">Photo de Profil :</label>
                    <input type="file" name="photo" class="w-full p-3 border rounded-lg">
                </div>

                <div>
                    <label class="block text-lg font-medium">Message :</label>
                    <textarea name="message" class="w-full p-3 border rounded-lg" placeholder="Laissez votre appréciation..."></textarea>
                </div>
                <div>
                    <label class="block text-lg font-medium">Note :</label>
                    <div class="flex space-x-2">
                        <input type="radio" name="note" value="1" class="hidden" id="star1">
                        <label for="star1" class="cursor-pointer text-yellow-500 text-2xl">★</label>
                        <input type="radio" name="note" value="2" class="hidden" id="star2">
                        <label for="star2" class="cursor-pointer text-yellow-500 text-2xl">★</label>
                        <input type="radio" name="note" value="3" class="hidden" id="star3">
                        <label for="star3" class="cursor-pointer text-yellow-500 text-2xl">★</label>
                        <input type="radio" name="note" value="4" class="hidden" id="star4">
                        <label for="star4" class="cursor-pointer text-yellow-500 text-2xl">★</label>
                        <input type="radio" name="note" value="5" class="hidden" id="star5">
                        <label for="star5" class="cursor-pointer text-yellow-500 text-2xl">★</label>
                    </div>
                </div>
                <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Envoyer</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const ctx = document.getElementById('reservationsChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil'],
                    datasets: [{
                        label: 'Réservations',
                        data: [12, 19, 3, 5, 2, 3, 7],
                        backgroundColor: 'rgba(59, 130, 246, 0.5)',
                        borderColor: 'rgba(59, 130, 246, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
