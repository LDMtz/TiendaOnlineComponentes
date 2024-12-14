<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'number',
        'state'
    ];

    /**
     * Relationship with Product.
     * A Supplier can have many Products.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
