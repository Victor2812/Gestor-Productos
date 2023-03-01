<?php

namespace App\Models;

use App\Models\Productos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function productos() {
        return $this->hasMany(Productos::class);
    }

}
