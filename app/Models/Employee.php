<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'names',
        'last_names',
        'number',
        'state',
        'account_id',
    ];

    //Relacion con el modelo Account (uno-uno)
    public function account():BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
