<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EstudianteSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('es_ES');
        $carreras = ['Ingeniería Informática', 'Medicina', 'Derecho', 'Administración', 'Contabilidad', 'Psicología'];

        for ($i = 0; $i < 50; $i++) {
            Estudiante::create([
                'nombre' => $faker->firstName(),
                'apellido' => $faker->lastName(),
                'ci' => $faker->unique()->numerify('########'),
                'fecha_nacimiento' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'email' => $faker->unique()->safeEmail(),
                'telefono' => $faker->numerify('########'),
                'imagen' => 'https://avatar.iran.liara.run/public?username=' . $faker->userName(),
                'carrera' => $faker->randomElement($carreras)
            ]);
        }
    }
}