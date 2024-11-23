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
}
