@extends('layouts.app')

@section('title', 'Lista de Juegos - GamerHub')

@section('content')
<style>
    .games-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px; margin-top: 20px; }
    .game-card { background: #0f3460; padding: 20px; border-radius: 8px; transition: transform 0.2s; }
    .game-card:hover { transform: translateY(-5px); }
    .game-card h2 { color: #e94560; margin-bottom: 10px; }
    .game-card .platform { color: #ffd700; font-size: 14px; }
    .game-card .rating { color: #00ff00; font-weight: bold; }
    .game-card a { display: inline-block; margin-top: 10px; padding: 8px 16px; background: #e94560; color: white; text-decoration: none; border-radius: 4px; }
</style>

<h1>Catálogo de Videojuegos</h1>

<div class="games-grid">
    @foreach($games as $game)
    <div class="game-card">
        <h2>{{ $game['title'] }}</h2>
        <p class="platform">🎮 {{ $game['platform'] }}</p>
        <p><strong>Género:</strong> {{ $game['genre'] }}</p>
        <p><strong>Año:</strong> {{ $game['year'] }}</p>
        <p class="rating">⭐ {{ $game['rating'] }}/10</p>
        <a href="{{ route('games.show', $game['id']) }}">Ver detalles</a>
    </div>
    @endforeach
</div>
@endsection
