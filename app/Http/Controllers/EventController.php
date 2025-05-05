<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($slug)
    {
        $events = [
            'vodun-days' => [
                'title' => 'VoDun Days',
                'image' => '../asset/OIP (2).webp',
                'alt' => 'Célébration des VoDun Days',
                'description' => 'Les VoDun Days célèbrent la spiritualité vaudou avec des cérémonies, des danses et des rituels colorés, attirant des visiteurs du monde entier.'
            ],
            'festival-musique' => [
                'title' => 'Festival de Musique',
                'image' => '../asset/OIP (3).webp',
                'alt' => 'Scène du Festival de Musique',
                'description' => 'Ce festival met en lumière la richesse musicale du Bénin, avec des performances allant des rythmes traditionnels aux sons modernes.'
            ],
            'atelier-traditionnel' => [
                'title' => 'Atelier Traditionnel et Exposition d’Art Contemporain',
                'image' => '../asset/IMG-20240412-WA0145.webp',
                'alt' => 'Atelier d’artisanat traditionnel',
                'description' => 'Participez à des ateliers d’artisanat et découvrez des expositions d’art contemporain, mêlant tradition et modernité.'
            ],
            'festival-masques' => [
                'title' => 'Festival des Masques à Porto-Novo',
                'image' => '../asset/4.webp',
                'alt' => 'Festival des Masques à Porto-Novo',
                'description' => 'Ce festival met en scène des danses masquées spectaculaires, reflétant les traditions culturelles profondes de Porto-Novo.'
            ],
            'fete-igname' => [
                'title' => 'Fête de l’Igname à Savalou',
                'image' => '../asset/savalou.webp',
                'alt' => 'Fête de l’Igname à Savalou',
                'description' => 'La Fête de l’Igname célèbre la récolte de cette culture essentielle avec des danses, des chants et des festins communautaires.'
            ],
            'fete-independance' => [
                'title' => 'Fête de l’Indépendance du Bénin',
                'image' => '../asset/OIP.webp',
                'alt' => 'Fête de l’Indépendance du Bénin',
                'description' => 'Célébrez l’indépendance du Bénin avec des défilés, des spectacles culturels et des feux d’artifice à travers le pays.'
            ],
        ];

        if (!array_key_exists($slug, $events)) {
            abort(404);
        }

        return view('detail', $events[$slug]);
    }
}