<?php

namespace Database\Seeders;

use App\Models\Productos;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        // Postres seeder

        Productos::create([
            'name' => 'Mousse de chocolate',
            'description' => 'Pieza 190 g aprox. | 16 €/kg',
            'tipo_vender' => 'KILO',
            'precio_base' => 3.04,
            'pedido_minimo' => 1,
            'alt' => null,
            'categoria_id' => 5,
        ]);

        Productos::create([
            'name' => 'Tiramisú',
            'description' => 'Pieza 190 g aprox. | 16 €/kg',
            'tipo_vender' => 'KILO',
            'precio_base' => 3.04,
            'pedido_minimo' => 1,
            'alt' => null,
            'categoria_id' => 5,
        ]);
    }
}
