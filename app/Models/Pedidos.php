<?php

namespace App\Models;

use App\Models\Personas;
use App\Models\Productos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado',
        'fecha_recogida',
        'fecha_reserva',
        'importe_total',
        'persona_id'
    ];

    // FUNCIONES 

    public function cliente() {
        return $this->belongsTo(Personas::class);
    }

    public function productos() {
        return $this->belongsToMany(Productos::class, 'pedido_productos');
    }
}
