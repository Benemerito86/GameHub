<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Juegos Couzy - GamerHub')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #e0f7fa, #f8bbd9, #e8eaf6);
            color: #333;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }
        .navbar {
            background: linear-gradient(90deg, #4db6ac, #f48fb1, #81d4fa) !important;
            backdrop-filter: blur(10px);
            border-bottom: 3px solid #b2ebf2;
        }
        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.8rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        main {
            min-height: calc(100vh - 100px);
            padding: 20px 0;
        }
        .heart-pulse {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('games.index') }}">
                <i class="fas fa-heart heart-pulse"></i> GamerHub Couzy
            </a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer style="background: linear-gradient(90deg, #4db6ac, #f48fb1); padding: 25px; text-align: center; margin-top: 40px; border-top: 3px solid #b2ebf2;">
        <p style="color: white; margin: 0; font-size: 1.1rem;">
            <i class="fas fa-heart"></i> © 2026 GamerHub Couzy - Mundo Encantador de Juegos <i class="fas fa-star"></i>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>