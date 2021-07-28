<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KecamatanModel extends Model
{
    protected $table = 'kecamatan';
    protected $fillable = [
        'id',
        'nama_kecamatan',
        'koordinat',
        'created_at',
        'deleted_at'
    ];
}
