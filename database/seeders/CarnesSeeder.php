<?php

namespace Database\Seeders;

use App\Models\Productos;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        // Carnes seeder

        Productos::create([
            'name' => 'Albóndigas de pollo en salsa verde',
            'description' => 'Pedido mínimo 2 raciones',
            'tipo_vender' => 'RACIONES',
            'precio_base' => 5.00,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => 4,
        ]);

        Productos::create([
            'name' => 'Carrilleras ibéricas al Rioja Alavesa',
            'description' => 'Pedido mínimo 2 raciones',
            'tipo_vender' => 'RACIONES',
            'precio_base' => 7.15,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => 4,
        ]);
    }
}
