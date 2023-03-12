<?php

namespace Database\Seeders;

use App\Models\Productos;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TVariadasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        // Tartas Variadas seeder

        Productos::create([
            'name' => 'Tarta de manzana',
            'description' => 'Pieza 550 g aprox. | 14 €/kg',
            'tipo_vender' => 'KILO',
            'precio_base' => 7.70,
            'pedido_minimo' => 1,
            'alt' => asset("imgs/tarta-manzana.png"),
            'categoria_id' => 8,
        ]);
    }
}
