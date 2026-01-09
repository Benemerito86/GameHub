@extends('layouts.app')

@section('title', $game['title'] . ' - GamerHub')

@section('content')
<style>
    /* Estilo para la tarjeta de detalle */
    .game-card-detail { 
        background: linear-gradient(135deg, #e0f7fa, #f8bbd9); 
        padding: 30px; 
        border-radius: 16px; 
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        position: relative;
        overflow: hidden;
        border: 2px solid #b2ebf2;
        max-width: 800px;
        margin: 40px auto;
    }
    .game-card-detail::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #a7f0ba, #ffc0cb, #b3e5fc);
    }
    .game-image-large {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 20px;
        border: 3px solid #e0f7fa;
    }
    .game-card-detail h1 { 
        color: #4db6ac; 
        margin-bottom: 20px; 
        font-size: 2rem;
        font-family: 'Comic Sans MS', cursive, sans-serif;
        text-align: center;
    }
    .game-info-detail { 
        margin: 15px 0; 
        padding: 12px;
        background: rgba(255,255,255,0.7);
        border-radius: 10px;
        border-left: 4px solid #a7f0ba;
    }
    .game-info-detail strong { 
        color: #f48fb1; 
        display: inline-block;
        width: 180px;
        font-weight: bold;
    }
    .rating-badge-detail {
        display: inline-block;
        background: linear-gradient(45deg, #a5d6a7, #c8e6c9);
        color: #2e7d32;
        padding: 4px 12px;
        border-radius: 18px;
        font-weight: bold;
        margin-left: 10px;
        border: 1px solid #a5d6a7;
        font-size: 0.9rem;
    }
    .back-button { 
        display: inline-block; 
        margin-top: 25px; 
        padding: 12px 24px; 
        background: linear-gradient(45deg, #a7f0ba, #f48fb1); 
        color: white; 
        text-decoration: none; 
        border-radius: 25px; 
        font-weight: bold;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        text-align: center;
        width: 100%;
        font-size: 1.1rem;
        box-shadow: 0 5px 15px rgba(167, 240, 186, 0.4);
    }
    .back-button:hover { 
        background: linear-gradient(45deg, #f48fb1, #a7f0ba); 
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(167, 240, 186, 0.6);
    }
    .description-text {
        color: #555;
        font-size: 1rem;
        line-height: 1.6;
        margin-top: 10px;
    }
</style>

<div class="game-card-detail">
    <img src="{{ asset('images/' . $game['image']) }}" alt="{{ $game['title'] }}" class="game-image-large">
    <h1>{{ $game['title'] }}</h1>
    
    <div class="game-info-detail">
        <p><strong>🎮 Plataforma:</strong> {{ $game['platform'] }}</p>
    </div>
    
    <div class="game-info-detail">
        <p><strong>🎀 Género:</strong> {{ $game['genre'] }}</p>
    </div>
    
    <div class="game-info-detail">
        <p><strong>🌸 Año:</strong> {{ $game['year'] }}</p>
    </div>
    
    <div class="game-info-detail">
        <p><strong>🌟 Valoración:</strong> {{ $game['rating'] }} <span class="rating-badge-detail">✨ {{ $game['rating'] }}/10</span></p>
    </div>
    
    <div class="game-info-detail">
        <p><strong>💕 Descripción:</strong></p>
        <p class="description-text">{{ $game['description'] }}</p>
    </div>
    
    <a href="{{ route('games.index') }}" class="back-button">
        🌸 ← Volver al catálogo couzy
    </a>
</div>
@endsection