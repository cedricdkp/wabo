<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Offer;
use App\Models\Site;
use App\Models\User;
use App\Models\CancellationPolicy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $provider = User::create([
            'name' => 'Agence Tourisme Bénin',
            'email' => 'provider@example.com',
            'password' => bcrypt('password'),
            'role' => 'provider',
        ]);
        Site::create([
            'provider_id' => $provider->id, 'name' => 'Ganvié', 'price' => 50000,
            'description' => 'Surnommé la "Venise de l\'Afrique", Ganvié est un village lacustre unique où les habitants vivent sur l\'eau.',
            'image' => 'ganvie.webp'
        ]);
        Site::create([
            'provider_id' => $provider->id, 'name' => 'Porto-Novo', 'price' => 30000,
            'description' => 'La capitale du Bénin, riche en histoire avec ses musées, marchés et architecture coloniale.',
            'image' => 'porto-novo.webp'
        ]);
        Site::create([
            'provider_id' => $provider->id, 'name' => 'Ouidah', 'price' => 40000,
            'description' => 'Un haut lieu historique avec la Route des Esclaves et des temples vaudou emblématiques.',
            'image' => 'ouidah.webp'
        ]);
        Event::create([
            'provider_id' => $provider->id, 'name' => 'Festival Vaudou', 'price' => 20000,
            'description' => 'Un événement spirituel unique à Ouidah, célébrant les traditions vaudou avec des danses et cérémonies, du 10 au 12 janvier 2026.',
            'image' => 'festival-vaudou.webp', 'date' => '2026-01-10'
        ]);
        Event::create([
            'provider_id' => $provider->id, 'name' => 'Fête de Porto-Novo', 'price' => 0,
            'description' => 'Une célébration gratuite de la culture porto-novienne avec des parades et spectacles, du 15 au 17 mars 2026.',
            'image' => 'fete-porto-novo.webp', 'date' => '2026-03-15'
        ]);
        Offer::create([
            'provider_id' => $provider->id, 'name' => 'Visite guidée à Ganvié', 'price' => 25000,
            'description' => '50% de réduction jusqu\'au 30 juin 2025.', 'image' => 'offre-ganvie.webp',
            'valid_until' => '2025-06-30'
        ]);
        Offer::create([
            'provider_id' => $provider->id, 'name' => 'Circuit à Ouidah', 'price' => 35000,
            'description' => 'Offre spéciale pour les groupes.', 'image' => 'offre-ouidah.webp',
            'valid_until' => '2025-12-31'
        ]);
        CancellationPolicy::create(['days_before' => 7, 'refund_percentage' => 100.00]);
        CancellationPolicy::create(['days_before' => 3, 'refund_percentage' => 50.00]);
        CancellationPolicy::create(['days_before' => 0, 'refund_percentage' => 0.00]);
    }
}