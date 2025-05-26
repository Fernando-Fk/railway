@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Estudiantes</h1>

    <div class="row">
        @foreach ($estudiantes as $estudiante)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $estudiante->imagen }}" class="card-img-top" alt="{{ $estudiante->nombre }} {{ $estudiante->apellido }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</h5>
                        <p class="card-text"><strong>Carrera:</strong> {{ $estudiante->carrera }}</p>
                        <a href="{{ route('estudiantes.show', $estudiante->id) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection 