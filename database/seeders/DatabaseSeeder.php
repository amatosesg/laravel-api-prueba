<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Estudiante;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Estudiante Adria 
        Estudiante::create([
            'nombre' => 'Adrià Matoses',
            'email' => 'adriam.test@gmail.com',
            'telefono' => '123 456 789',
            'direccion' => 'Calle Falsa 123',
            'dni' => '12345678A'
        ]);

        // Estudiantes de ejemplo generados aleatoriamente
        Estudiante::factory(10)->create();

        // Estudiante de Prueba por si se ejecuta la documentación sin haber hecho nada en la base de datos
        Estudiante::create([
            'nombre' => 'Usuario Test',
            'email' => 'adriam.test@gmail.com',
            'telefono' => '123 456 789',
            'direccion' => 'Calle Falsa 123',
            'dni' => '12345678A'
        ]);
    }
}
