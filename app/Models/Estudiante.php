<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'ci',
        'fecha_nacimiento',
        'email',
        'telefono',
        'imagen',
        'carrera',
    ];
    //
}
