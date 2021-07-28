<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    protected $table= 'kelas';
    protected $fillable=
    [
        'id',
        'nama_kelas',
        'created_at',
        'update_at'
    ];
}
