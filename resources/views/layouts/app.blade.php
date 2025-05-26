<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lista de Estudiantes</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Lista Estudiantes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('estudiantes.index') }}">Estudiantes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Placeholder for Slider (Implementation Needed) -->
    <div class="container mt-4">
        <h3>Estudiantes Destacados (Slider Placeholder)</h3>
        {{-- A full slider implementation requires a JavaScript library and more complex view logic. --}}
        {{-- For now, you can list featured students here, or integrate a simple carousel. --}}
        {{-- @isset($destacados) --}}
            {{-- <ul> --}}
                {{-- @foreach ($destacados as $destacado) --}}
                    {{-- <li>{{ $destacado->nombre }} {{ $destacado->apellido }}</li> --}}
                {{-- @endforeach --}}
            {{-- </ul> --}}
        {{-- @endisset --}}
    </div>

    <!-- Bootstrap JS (optional, for components like navbar toggler) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 