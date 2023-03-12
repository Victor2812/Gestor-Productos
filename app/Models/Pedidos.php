<?php

namespace App\Models;

use App\Models\Personas;
use App\Models\Productos;
use Illuminate\Database\Eloquent\Builder;
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

    const ESTADOS = [
        'recibido' => 'recibido',
        'en proceso' => 'en proceso',
        'finalizado' => 'finalizado',
    ];

    // FUNCIONES 

    public function cliente() {
        return $this->belongsTo(Personas::class,'persona_id');
    }

    public function productos() {
        return $this->belongsToMany(Productos::class, 'pedido_productos','pedido_id','producto_id')
        ->withTimestamps();
    }
}
