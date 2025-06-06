<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('ci')->unique();
            $table->date('fecha_nacimiento');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('imagen');
            $table->string('carrera');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};