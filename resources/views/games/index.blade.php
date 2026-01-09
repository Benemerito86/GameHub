@extends('layouts.app')

@section('title', 'Juegos Couzy - GamerHub')

@section('content')
<style>
    .games-grid { 
        display: grid; 
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); 
        gap: 30px; 
        margin-top: 20px; 
        padding: 20px;
    }
    .game-card { 
        background: linear-gradient(135deg, #e0f7fa, #f8bbd9); 
        padding: 25px; 
        border-radius: 16px; 
        transition: all 0.3s ease; 
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        position: relative;
        overflow: hidden;
        border: 2px solid #b2ebf2;
    }
    .game-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #a7f0ba, #ffc0cb, #b3e5fc);
    }
    .game-card:hover { 
        transform: translateY(-8px); 
        box-shadow: 0 15px 35px rgba(167, 240, 186, 0.3);
    }
    .game-image {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 15px;
        border: 3px solid #e0f7fa;
    }
    .game-card h2 { 
        color: #4db6ac; 
        margin-bottom: 12px; 
        font-size: 1.4rem;
        font-family: 'Comic Sans MS', cursive, sans-serif;
    }
    .game-card .platform { 
        color: #f48fb1; 
        font-size: 14px; 
        margin-bottom: 8px;
        font-weight: bold;
    }
    .game-card .genre {
        color: #81d4fa;
        font-style: italic;
        margin-bottom: 8px;
        font-size: 0.9rem;
    }
    .game-card .rating { 
        color: #a5d6a7; 
        font-weight: bold; 
        margin-bottom: 12px;
        font-size: 1.1rem;
    }
    .game-card a { 
        display: inline-block; 
        margin-top: 10px; 
        padding: 12px 24px; 
        background: linear-gradient(45deg, #a7f0ba, #f48fb1); 
        color: white; 
        text-decoration: none; 
        border-radius: 25px; 
        font-weight: bold;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }
    .game-card a:hover { 
        background: linear-gradient(45deg, #f48fb1, #a7f0ba); 
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(167, 240, 186, 0.5);
    }
    .year-tag {
        display: inline-block;
        background: rgba(179, 229, 252, 0.3);
        color: #0288d1;
        padding: 3px 10px;
        border-radius: 15px;
        font-size: 0.8rem;
        margin-left: 8px;
        border: 1px solid #81d4fa;
    }
    .heart-icon {
        color: #f48fb1;
        margin-right: 5px;
    }
</style>

<h1 style="text-align: center; color: #4db6ac; margin: 30px 0; font-size: 2.5rem; 
          font-family: 'Comic Sans MS', cursive, sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">
    🌸🎮 Juegos Couzy - Mundo Encantador
</h1>

<div class="games-grid">
    @foreach($games as $game)
    <div class="game-card">
        <img src="{{ asset('images/' . $game['image']) }}" alt="{{ $game['title'] }}" class="game-image">
        <h2>{{ $game['title'] }}</h2>
        <p class="platform"><span class="heart-icon">💖</span> {{ $game['platform'] }} <span class="year-tag">{{ $game['year'] }}</span></p>
        <p class="genre">🎀 {{ $game['genre'] }}</p>
        <p class="rating">🌟 {{ $game['rating'] }}/10</p>
        <p style="color: #666; font-size: 0.9rem; line-height: 1.4; margin-bottom: 15px;">{{ \Illuminate\Support\Str::limit($game['description'], 120) }}</p>
        <a href="{{ route('games.show', $game['id']) }}">✨ Ver detalles</a>
    </div>
    @endforeach
</div>
@endsection