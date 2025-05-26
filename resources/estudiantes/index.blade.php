@extends('layouts.app')

@section('content')
    @if($destacados->count() > 0)
    <div id="carouselEstudiantes" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($destacados as $index => $estudiante)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="d-flex justify-content-center">
                    <div class="card" style="max-width: 300px;">
                        <img src="{{ $estudiante->imagen }}" class="card-img-top" alt="{{ $estudiante->nombre }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</h5>
                            <p class="card-text">{{ $estudiante->carrera }}</p>
                            <a href="{{ route('estudiantes.show', $estudiante) }}" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselEstudiantes" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselEstudiantes" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    @endif

    <h2 class="mb-4">Lista de Estudiantes</h2>
    
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($estudiantes as $estudiante)
        <div class="col">
            <div class="card h-100">
                <img src="{{ $estudiante->imagen }}" class="card-img-top" alt="{{ $estudiante->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</h5>
                    <p class="card-text">{{ $estudiante->carrera }}</p>
                    <a href="{{ route('estudiantes.show', $estudiante) }}" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection 