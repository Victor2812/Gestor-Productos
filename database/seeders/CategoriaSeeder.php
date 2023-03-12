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
        // CATEGORIA 1

        Categoria::create([
            'name' => 'FRITOS',
            'parent_id' => null,
        ]);

        // CATEGORIA 2
        
        Categoria::create([
            'name' => 'ENTRANTES',
            'parent_id' => null,
        ]);

        // CATEGORIA 3
        
        Categoria::create([
            'name' => 'PESCADOS',
            'parent_id' => null,
        ]);

        // CATEGORIA 4
        
        Categoria::create([
            'name' => 'CARNES',
            'parent_id' => null,
        ]);

        // CATEGORIA 5
        
        Categoria::create([
            'name' => 'POSTRES',
            'parent_id' => null,
        ]);

        // SUBCATEGORIA 1
        
        Categoria::create([
            'name' => 'TARTAS DE BIZCOCHO',
            'parent_id' => 5,
        ]);

        // SUBCATEGORIA 2
        
        Categoria::create([
            'name' => 'TARTAS DE HOJALDRE',
            'parent_id' => 5,
        ]);

        // SUBCATEGORIA 3
        
        Categoria::create([
            'name' => 'TARTAS VARIADAS',
            'parent_id' => 5,
        ]);

    }
}
