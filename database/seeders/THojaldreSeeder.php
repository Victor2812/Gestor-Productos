<?php

namespace Database\Seeders;

use App\Models\Productos;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class THojaldreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        // Tartas de Hojaldre seeder

        Productos::create([
            'name' => 'Milhojas de nata',
            'description' => 'Pieza 480 g aprox. | 17 €/kg',
            'tipo_vender' => 'KILO',
            'precio_base' => 8.16,
            'pedido_minimo' => 1,
            'alt' => asset("imgs/tarta-milhojas.png"),
            'categoria_id' => 7,
        ]);
    }
}
