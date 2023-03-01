<?php

namespace App\Models;

use App\Models\Productos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'parent_id'
    ];

    // FUNCIONES

    public function productos() {
        return $this->hasMany(Productos::class);
    }

    public function subcategory() {
        return $this->hasMany(Categoria::class, 'parent_id');
    }

    public static function tree() {
        $allCategories = Categoria::get();

        $rootCategories = $allCategories->whereNull('parent_id');

        self::formatTree($rootCategories, $allCategories);

        return $rootCategories;
    }

    private static function formatTree($categories, $allCategories) {
        foreach ($categories as $category) {
            $category->children = $allCategories->where('parent_id', $category->id);

            if ($category->children->isNotEmpty()) {
                self::formatTree($category->children, $allCategories);
            }
        }
    }

}
