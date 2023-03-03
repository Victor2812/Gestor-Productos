<?php

namespace Database\Seeders;

use App\Models\Productos;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TBizcochoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        // Tartas de Bizcocho seeder

        Productos::create([
            'name' => 'Tarta San Marcos',
            'description' => 'Pieza 675 g aprox. | 16 €/kg',
            'tipo_vender' => 'KILO',
            'precio_base' => 10.80,
            'pedido_minimo' => 1,
            'alt' => asset("imgs/tarta-san-marcos.png"),
            'categoria_id' => 6,
        ]);
    }
}
