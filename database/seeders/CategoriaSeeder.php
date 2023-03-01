<?php

namespace Database\Seeders;

use App\Models\Categoria;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        foreach (config('categorias') as $name => $id) {
            Categoria::factory()->create([
                'id' => $id,
                'name' => $name,
            ]);
        }
    }
}
