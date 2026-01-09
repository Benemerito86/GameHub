<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GamerHub')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #1a1a2e; color: #eee; }
        header { background: #16213e; padding: 20px; text-align: center; }
        header h1 { color: #eee; }
        .container { max-width: 1200px; margin: 20px auto; padding: 0 20px; }
        footer { text-align: center; padding: 20px; margin-top: 40px; background: #16213e; }
    </style>
</head>
<body>
    <header>
        <h1>GameHub</h1>
        <p>Tu catálogo de videojuegos</p>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2026 GamerHub - Proyecto Laravel</p>
    </footer>
</body>
</html>

