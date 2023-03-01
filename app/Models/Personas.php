<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Pedidos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'dni',
        'role_id'
    ];

    // FUNCIONES

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function pedidos() {
        return $this->hasMany(Pedidos::class);
    }

    public function fullName() {
        return $this->name . ' ' . $this->surname;
    }
}
