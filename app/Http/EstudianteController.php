<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        $destacados = Estudiante::inRandomOrder()->take(5)->get();
        return view('estudiantes.index', compact('estudiantes', 'destacados'));
    }

    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.show', compact('estudiante'));
    }
} 