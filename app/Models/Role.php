<?php

namespace App\Models;

use App\Models\Personas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function personas() {
        return $this->hasMany(Personas::class);
    }
}
