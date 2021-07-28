<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContohModel extends Model
{
    protected $table = 'contoh';
    protected $fillable = [
        'id', 'nama', 'ket', 'created_at', 'updated_at'
    ];
}
