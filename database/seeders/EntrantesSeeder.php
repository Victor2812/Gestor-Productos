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
            'name' => 'Canelones rellenos de espinacas y hongos',
            'description' => 'Pedido mínimo 2 raciones',
            'tipo_vender' => 'RACIONES',
            'precio_base' => 4.30,
            'pedido_minimo' => 2,
            'alt' => asset("imgs/canelones.png"),
            'categoria_id' => 2,
        ]);

        Productos::create([
            'name' => 'Piquillos rellenos de merluza y gambas',
            'description' => 'Pedido mínimo 2 raciones',
            'tipo_vender' => 'RACIONES',
            'precio_base' => 5.50,
            'pedido_minimo' => 2,
            'alt' => asset("imgs/piquillos.png"),
            'categoria_id' => 2,
        ]);
    }
}
