<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WebDesciptionModel extends Model
{
    protected $table ="web_description";
    protected $fillable=[
        'id',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}
