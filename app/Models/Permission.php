<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';

    protected $fillable = [
        'name',
        'description',
    ];

    //Relacion bidireccional con la tabla roles (muchos-muchos)
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_role');
    }
}
