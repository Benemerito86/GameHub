<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    private function getGames()
    {
        return [
            [
                'id' => 1,
                'title' => 'Animal Crossing: New Horizons',
                'platform' => 'Nintendo Switch',
                'genre' => 'Simulación',
                'year' => 2020,
                'description' => 'Convierte tu isla desierta en un paraíso encantador. Colecciona muebles, decora tu casa y haz amigos con los aldeanos más adorables.',
                'rating' => 9.2,
                'image' => 'animal_crossing.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Stardew Valley',
                'platform' => 'Multi-plataforma',
                'genre' => 'Simulación',
                'year' => 2016,
                'description' => 'Deja atrás la vida urbana y convierte la granja abandonada de tu abuelo en un lugar próspero. Haz amigos, encuentra amor y construye una comunidad.',
                'rating' => 9.0,
                'image' => 'stardew_valley.jpg'
            ],
            [
                'id' => 3,
                'title' => 'My Time at Portia',
                'platform' => 'Multi-plataforma',
                'genre' => 'Simulación',
                'year' => 2019,
                'description' => 'Restaura el taller de tu padre en la encantadora ciudad de Portia. Cultiva tu granja, construye máquinas y forma relaciones profundas.',
                'rating' => 8.5,
                'image' => 'my_time_at_portia.jpg'
            ],
            [
                'id' => 4,
                'title' => 'Harvest Moon: One World',
                'platform' => 'Multi-plataforma',
                'genre' => 'Simulación',
                'year' => 2021,
                'description' => 'Viaja por diferentes países y cultiva tus granjas con estilos únicos. Conoce personajes entrañables y descubre secretos encantadores.',
                'rating' => 7.8,
                'image' => 'harvest_moon.jpg'
            ],
            [
                'id' => 5,
                'title' => 'Story of Seasons: Friends of Mineral Town',
                'platform' => 'Multi-plataforma',
                'genre' => 'Simulación',
                'year' => 2020,
                'description' => 'Revive la clásica historia de la granja Mineral Town. Cuida animales, cultiva tus campos y construye relaciones significativas.',
                'rating' => 8.7,
                'image' => 'story_of_seasons.jpg'
            ],
            [
                'id' => 6,
                'title' => 'Spiritfarer',
                'platform' => 'Multi-plataforma',
                'genre' => 'Simulación',
                'year' => 2020,
                'description' => 'Sé una espíritu-fará de la muerte gentil. Construye barcos, cuida animales y acompaña a las almas en su último viaje con ternura.',
                'rating' => 8.9,
                'image' => 'spiritfarer.jpg'
            ]
        ];
    }

    public function index()
    {
        $games = $this->getGames();
        return view('games.index', ['games' => $games]);
    }

    public function show($id)
    {
        $games = $this->getGames();
        $game = collect($games)->firstWhere('id', (int)$id);
        
        if (!$game) {
            abort(404);
        }
        
        return view('games.show', ['game' => $game]);
    }
}