<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    //Relación con el modelo Employee. (uno-uno)
    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class, 'account_id');
    }

    // Relación con el modelo Client (uno a uno)
    public function client(): HasOne
    {
        return $this->hasOne(Client::class, 'account_id');
    }

    //Relación con el modelo Role (uno-muchos)
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
