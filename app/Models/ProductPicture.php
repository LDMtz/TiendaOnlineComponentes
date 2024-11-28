<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPicture extends Model
{
    protected $table = 'picture_product';

    protected $primaryKey = 'id';

    protected $fillable = ['product_id', 'picture'];

    public $timestamps = false;

    // Relación inversa con Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
