<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Autenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Autenticatable
{
    use Notifiable;
    protected $fillable = [
        'id',
        'full_name',
        'username',
        'password',
        'created_at',
        'updated_at'
    ];
}
