<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function show($slug)
    {
        $destinations = [
            'ouidah' => [
                'title' => 'Ouidah',
                'image' => asset('asset/R.jpeg'),
                'alt' => 'Temple des Pythons à Ouidah',
                'description' => 'Ouidah, berceau du vaudou, est célèbre pour son Temple des Pythons et la Route des Esclaves, un site historique poignant menant au mémorial de la Porte du Non-Retour.'
            ],
            'pendjari' => [
                'title' => 'Parc de la Pendjari',
                'image' => asset('asset/pendjari-national-park.jpg'),
                'alt' => 'Faune du Parc de la Pendjari',
                'description' => 'Le Parc National de la Pendjari est l’un des meilleurs endroits en Afrique de l’Ouest pour observer la faune, notamment les éléphants, les lions et les hippopotames.'
            ],
            'ganvie' => [
                'title' => 'Ganvié',
                'image' => asset('asset/R (1).jpeg'),
                'alt' => 'Village lacustre de Ganvié',
                'description' => 'Surnommé la "Venise de l’Afrique", Ganvié est un village lacustre unique où les habitants vivent sur l’eau dans des maisons sur pilotis.'
            ],
            'porto-novo' => [
                'title' => 'Porto-Novo',
                'image' => asset('asset/R (2).jpeg'),
                'alt' => 'Musée ethnographique de Porto-Novo',
                'description' => 'Capitale du Bénin, Porto-Novo abrite des musées riches comme le Musée Ethnographique et des bâtiments coloniaux reflétant son histoire.'
            ],
            'kota' => [
                'title' => 'Chutes de Kota - Natitingou',
                'image' => asset('asset/large-waterfall.jpg'),
                'alt' => 'Chutes de Kota à Natitingou',
                'description' => 'Les Chutes de Kota, situées près de Natitingou, offrent un cadre naturel spectaculaire, idéal pour la randonnée et la détente.'
            ],
            'abomey' => [
                'title' => 'Abomey',
                'image' => asset('asset/private-palace-of-king.jpg'),
                'alt' => 'Palais royaux d’Abomey',
                'description' => 'Abomey, ancienne capitale du royaume du Dahomey, est célèbre pour ses palais royaux classés au patrimoine mondial de l’UNESCO.'
            ],
            'grand-popo' => [
                'title' => 'Grand-Popo',
                'image' => asset('asset/grand-popo.png'),
                'alt' => 'Plage de Grand-Popo',
                'description' => 'Grand-Popo est une destination balnéaire paisible, connue pour ses plages de sable fin et ses lagunes bordées de mangroves.'
            ],
        ];

        if (!array_key_exists($slug, $destinations)) {
            abort(404);
        }

        return view('detail', $destinations[$slug]);
    }
}