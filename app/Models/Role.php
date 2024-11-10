<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'name',
    ];

    //Relacion con Permissions (muchos-muchos)
    public function permissions():BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }

    // Relación con Account (uno-muchos)
    public function accounts():HasMany
    {
        return $this->hasMany(Account::class, 'role_id');
    }
}
