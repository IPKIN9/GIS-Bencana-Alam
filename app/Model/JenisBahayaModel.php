<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JenisBahayaModel extends Model
{
    protected $table = 'jenis_bahaya';
    protected $fillable =
    [
        'id',
        'nama_jenis_bahaya',
        'created_at',
        'updated_at'
    ];
}
