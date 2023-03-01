<?php

namespace Database\Seeders;

use App\Models\Productos;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FritosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Productos Fritos

        Productos::create([
            'name' => 'Croquetas de hongos',
            'description' => 'ración 12 unidades',
            'tipo_vender' => 'raciones',
            'precio_base' => 5.60,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => config('categorias.FRITOS')
        ]);

        Productos::create([
            'name' => 'Croquetas de jamón ibérico',
            'description' => 'ración 12 unidades',
            'tipo_vender' => 'raciones',
            'precio_base' => 5.60,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => config('categorias.FRITOS')
        ]);

        Productos::create([
            'name' => 'Croquetas de txipirón',
            'description' => 'ración 12 unidades',
            'tipo_vender' => 'raciones',
            'precio_base' => 5.60,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => config('categorias.FRITOS')
        ]);

        Productos::create([
            'name' => 'Tigres (mejillones rellenos)',
            'description' => 'ración 12 unidades',
            'tipo_vender' => 'raciones',
            'precio_base' => 6.00,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => config('categorias.FRITOS')
        ]);

    }
}
