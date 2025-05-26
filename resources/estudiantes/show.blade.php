@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $estudiante->imagen }}" class="img-fluid rounded-start" alt="{{ $estudiante->nombre }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</h2>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <p><strong>Carrera:</strong> {{ $estudiante->carrera }}</p>
                            <p><strong>CI:</strong> {{ $estudiante->ci }}</p>
                            <p><strong>Fecha de Nacimiento:</strong> {{ $estudiante->fecha_nacimiento->format('d/m/Y') }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Email:</strong> {{ $estudiante->email }}</p>
                            <p><strong>Teléfono:</strong> {{ $estudiante->telefono }}</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Volver a la lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 