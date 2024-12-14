<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = [
        'data',
        'state',
        'category_id',
        'supplier_id',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    /**
     * Relationship with Category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relationship with Supplier.
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    // Relación uno a muchos con Picture
    public function pictures()
    {
        return $this->hasMany(ProductPicture::class);
    }

    //Relacion de muchos a muchos con las etiquetas
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_product');
    }
}
