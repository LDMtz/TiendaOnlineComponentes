<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_category_id',
        'state',
    ];

    /**
     * Relación de una categoría con su categoría padre.
     * Una categoría puede tener una categoría padre.
     */
    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_category_id');
    }

    /**
     * Relación de una categoría con sus categorías hijas.
     * Una categoría puede tener muchas categorías hijas.
     */
    public function childCategories()
    {
        return $this->hasMany(Category::class, 'parent_category_id');
    }
}
