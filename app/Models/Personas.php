<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Pedidos;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Personas extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'dni',
        'phone',
        'role_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
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
