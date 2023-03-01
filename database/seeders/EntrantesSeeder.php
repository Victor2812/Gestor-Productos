<?php

namespace Database\Seeders;

use App\Models\Productos;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        // Entrantes seeder

        Productos::create([
            'name' => 'Entrante 1',
            'description' => 'Escalibada de verduras con ventresca de bonito',
            'tipo_vender' => 'raciones',
            'precio_base' => 8.20,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => config('categorias.ENTRANTES')
        ]);

        Productos::create([
            'name' => 'Entrante 2',
            'description' => 'Canelones rellenos de espinacas y hongos',
            'tipo_vender' => 'raciones',
            'precio_base' => 4.30,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => config('categorias.ENTRANTES')
        ]);

        Productos::create([
            'name' => 'Entrante 3',
            'description' => 'Pencas de acelga rellenas de paleta de Basatxerri',
            'tipo_vender' => 'raciones',
            'precio_base' => 4.75,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => config('categorias.ENTRANTES')
        ]);

        Productos::create([
            'name' => 'Entrante 4',
            'description' => 'Piquillos rellenos de merluza y gambas',
            'tipo_vender' => 'raciones',
            'precio_base' => 5.50,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => config('categorias.ENTRANTES')
        ]);

        Productos::create([
            'name' => 'Entrante 5',
            'description' => 'Piquillos rellenos de zancarrón y shiitake “eko”',
            'tipo_vender' => 'raciones',
            'precio_base' => 5.50,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => config('categorias.ENTRANTES')
        ]);
    }
}
