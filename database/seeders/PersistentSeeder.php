<?php

namespace Database\Seeders;

use App\Models\Personas;
use App\Models\Productos;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersistentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        // Usuarios de prueba

        // Administrator

        Personas::factory()->create([
            'dni' => '12345678A',
            'name' => 'Ameer',
            'surname' => 'Hamza',
            'email' => 'admin@gmail.com',
            'role_id' => config('roles.ADMINISTRADOR'),
        ]);

        // Cliente 1

        Personas::factory()->create([
            'dni' => '12345678B',
            'name' => 'Gorka',
            'surname' => 'Uriarte',
            'email' => 'gorka@gmail.com',
            'role_id' => config('roles.CLIENTE'),
        ]);

        // Cliente 2

        Personas::factory()->create([
            'dni' => '12345678C',
            'name' => 'Tania',
            'surname' => 'Hernando',
            'email' => 'tania@gmail.com',
            'role_id' => config('roles.CLIENTE'),
        ]);

        // Cliente 3

        Personas::factory()->create([
            'dni' => '12345678D',
            'name' => 'Victor',
            'surname' => 'Ibañez',
            'email' => 'victor@gmail.com',
            'role_id' => config('roles.CLIENTE'),
        ]);
    }
}
