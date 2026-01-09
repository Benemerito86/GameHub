@extends('layouts.app')

@section('title', $game['title'] . ' - GamerHub')

@section('content')
<style>
    .game-detail { background: #0f3460; padding: 30px; border-radius: 8px; }
    .game-detail h1 { color: #e94560; margin-bottom: 20px; }
    .game-info { margin: 15px 0; }
    .game-info strong { color: #ffd700; }
    .back-link { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #16213e; color: white; text-decoration: none; border-radius: 4px; }
    .back-link:hover { background: #0f3460; }
</style>

<div class="game-detail">
    <h1>{{ $game['title'] }}</h1>
    
    <div class="game-info">
        <p><strong>🎮 Plataforma:</strong> {{ $game['platform'] }}</p>
    </div>
    
    <div class="game-info">
        <p><strong>🎯 Género:</strong> {{ $game['genre'] }}</p>
    </div>
    
    <div class="game-info">
        <p><strong>📅 Año de lanzamiento:</strong> {{ $game['year'] }}</p>
    </div>
    
    <div class="game-info">
        <p><strong>⭐ Valoración:</strong> {{ $game['rating'] }}/10</p>
    </div>
    
    <div class="game-info">
        <p><strong>📝 Descripción:</strong></p>
        <p>{{ $game['description'] }}</p>
    </div>
    
    <a href="{{ route('games.index') }}" class="back-link">← Volver al catálogo</a>
</div>
@endsection
