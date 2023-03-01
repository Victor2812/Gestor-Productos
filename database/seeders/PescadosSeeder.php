<?php

namespace Database\Seeders;

use App\Models\Productos;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PescadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        // Pescados seeder
        
        Productos::create([
            'name' => 'Bacalao a la bizkaina',
            'description' => 'Pedido mínimo 2 raciones',
            'tipo_vender' => 'RACIONES',
            'precio_base' => 10.70,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => 3,
        ]);

        Productos::create([
            'name' => 'Chipirones en su tinta',
            'description' => 'Pedido mínimo 2 raciones',
            'tipo_vender' => 'RACIONES',
            'precio_base' => 7.10,
            'pedido_minimo' => 2,
            'alt' => null,
            'categoria_id' => 3,
        ]);
    }
}
