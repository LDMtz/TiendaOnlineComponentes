<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;

    // Especifica la tabla a la que pertenece el modelo
    protected $table = 'inventories';

    // Especifica la clave primaria
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id',    // Relación con el producto
        'stock',         // Cantidad de producto disponible
        'purchase_price',// Precio de compra
        'sale_price',    // Precio de venta
    ];

    // Define la relación uno a uno con el modelo Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}