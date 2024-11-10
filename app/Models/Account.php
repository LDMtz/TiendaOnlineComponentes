<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillable = [
        'role_id',
        'username',
        'password',
        'picture_profile',
        'state',
    ];


    //Relación con el modelo Role
    public function role():BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
