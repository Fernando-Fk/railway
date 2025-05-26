@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ $estudiante->imagen }}" class="card-img" alt="{{ $estudiante->nombre }} {{ $estudiante->apellido }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</h2>
                    <p class="card-text"><strong>CI:</strong> {{ $estudiante->ci }}</p>
                    <p class="card-text"><strong>Fecha de Nacimiento:</strong> {{ \Carbon\Carbon::parse($estudiante->fecha_nacimiento)->format('d/m/Y') }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $estudiante->email }}</p>
                    <p class="card-text"><strong>Teléfono:</strong> {{ $estudiante->telefono }}</p>
                    <p class="card-text"><strong>Carrera:</strong> {{ $estudiante->carrera }}</p>
                    <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 