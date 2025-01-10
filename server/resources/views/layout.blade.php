<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Mi Aplicación CRUD</h1>
        <nav>
            <a href="{{ route('users.index') }}">Inicio</a><br/><br/>
            <a href="{{ route('users.create') }}">Crear Usuario</a>
        </nav>
    </header>
    <main>
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} My Laravel App</p>
    </footer>
</body>
</html>