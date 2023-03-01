<?php

namespace App\Models;

use App\Models\Categoria;
use App\Models\Pedidos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'tipo_vender',
        'precio_base',
        'pedido_minimo',
        'alt',
        'categoria_id',
    ];

    // FUNCIONES

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function pedidos() {
        return $this->belongsToMany(Pedidos::class, 'pedido_productos');
    }
}
