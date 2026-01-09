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
                'title' => 'The Legend of Zelda: Breath of the Wild',
                'platform' => 'Nintendo Switch',
                'genre' => 'Aventura',
                'year' => 2017,
                'description' => 'Un juego de mundo abierto donde Link explora Hyrule para derrotar a Calamity Ganon.',
                'rating' => 9.5
            ],
            [
                'id' => 2,
                'title' => 'God of War',
                'platform' => 'PlayStation',
                'genre' => 'Acción',
                'year' => 2018,
                'description' => 'Kratos y su hijo Atreus emprenden un viaje épico por los reinos nórdicos.',
                'rating' => 9.3
            ],
            [
                'id' => 3,
                'title' => 'Hades',
                'platform' => 'Multi-plataforma',
                'genre' => 'Roguelike',
                'year' => 2020,
                'description' => 'Zagreus intenta escapar del inframundo en este roguelike de combate dinámico.',
                'rating' => 9.0
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

