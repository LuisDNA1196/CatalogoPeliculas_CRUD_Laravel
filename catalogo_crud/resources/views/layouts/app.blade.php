<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Catálogo de Películas')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Bootstrap CDN básico --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <header class="mb-4">
            <h1 class="mb-1">Catálogo de Películas</h1>
            <p class="text-muted mb-0">
                Actividad 3.3 – Aplicación web con base de datos (CRUD en Laravel + Railway)
            </p>
            <hr>
            <nav class="mb-3">
                <a href="{{ route('peliculas.index') }}" class="btn btn-outline-primary btn-sm">Inicio</a>
                <a href="{{ route('peliculas.create') }}" class="btn btn-primary btn-sm">Nueva película</a>
            </nav>
        </header>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <main>
            @yield('content')
        </main>

        <footer class="mt-4 pt-3 border-top text-muted small">
            <p class="mb-0"><strong>Curso:</strong> Conceptualización de entornos de desarrollo de aplicaciones y servicios</p>
            <p class="mb-0"><strong>Estudiante:</strong> Luis David Narvaez Altamirano</p>
            <p class="mb-0"><strong>Código:</strong> (tu código aquí)</p>
            <p class="mb-0"><strong>Contacto:</strong> tu_correo@dominio.com</p>
        </footer>
    </div>
</body>
</html>
