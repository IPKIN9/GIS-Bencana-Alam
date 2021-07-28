<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table='contactus';
    protected $fillable=[
        'id',
        'alamat',
        'kantor_pos',
        'email',
        'telepon',
        'created_at',
        'updated_at'
    ];
}
