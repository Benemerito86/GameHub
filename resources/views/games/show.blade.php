@extends('layouts.app')

@section('title', $game['title'] . ' - GamerHub')

@section('content')
<style>
    .game-detail { 
        background: linear-gradient(135deg, #e0f7fa, #f8bbd9, #e8eaf6); 
        padding: 40px; 
        border-radius: 20px; 
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        max-width: 900px;
        margin: 30px auto;
        border: 3px solid #b2ebf2;
        position: relative;
        overflow: hidden;
    }
    .game-detail::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
        opacity: 0.1;
    }
    .game-image-large {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 15px;
        margin-bottom: 25px;
        border: 4px solid #e0f7fa;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .game-detail h1 { 
        color: #4db6ac; 
        margin-bottom: 25px; 
        font-size: 2.2rem;
        text-align: center;
        font-family: 'Comic Sans MS', cursive, sans-serif;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }
    .game-info { 
        margin: 18px 0; 
        padding: 15px;
        background: rgba(255,255,255,0.7);
        border-radius: 12px;
        border-left: 4px solid #a7f0ba;
    }
    .game-info strong { 
        color: #f48fb1; 
        display: inline-block;
        width: 180px;
        font-weight: bold;
    }
    .rating-badge {
        display: inline-block;
        background: linear-gradient(45deg, #a5d6a7, #c8e6c9);
        color: #2e7d32;
        padding: 6px 15px;
        border-radius: 20px;
        font-weight: bold;
        margin-left: 10px;
        border: 1px solid #a5d6a7;
    }
</style>

<div class="game-detail">
    <img src="{{ asset('images/' . $game['image']) }}" alt="{{ $game['title'] }}" class="game-image-large">
    <h1>{{ $game['title'] }}</h1>
    
    <div class="game-info">
        <p><strong>🎮 Plataforma:</strong> {{ $game['platform'] }}</p>
    </div>
    
    <div class="game-info">
        <p><strong>🎀 Género:</strong> {{ $game['genre'] }}</p>
    </div>
    
    <div class="game-info">
        <p><strong>🌸 Año de lanzamiento:</strong> {{ $game['year'] }}</p>
    </div>
    
    <div class="game-info">
        <p><strong>🌟 Valoración:</strong> {{ $game['rating'] }} <span class="rating-badge">✨ {{ $game['rating'] }}/10</span></p>
    </div>
    
    <div class="game-info">
        <p><strong>💕 Descripción:</strong></p>
        <p style="margin-top: 12px; line-height: 1.7; color: #555; font-size: 1.1rem;">{{ $game['description'] }}</p>
    </div>
    
    <!-- Botón corregido con estilo Bootstrap -->
    <a href="{{ route('games.index') }}" class="btn btn-primary btn-lg" style="
        background: linear-gradient(45deg, #a7f0ba, #f48fb1, #b3e5fc); 
        border: none; 
        border-radius: 30px; 
        font-weight: bold; 
        margin-top: 25px; 
        display: inline-block;
        box-shadow: 0 5px 15px rgba(167, 240, 186, 0.4);
    ">
        <i class="fas fa-seedling"></i> 🌸 Volver al catálogo couzy
    </a>
</div>
@endsection