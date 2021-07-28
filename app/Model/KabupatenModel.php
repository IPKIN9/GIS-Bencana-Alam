<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KabupatenModel extends Model
{
    protected $table="kabupaten";
    protected $fillable=[
        'id',
        'nama_kabupaten',
        'id_kecamatan',
        'created_at',
        'updated_at'
    ];

    public function kecamatan_role()
    {
        return $this->belongsTo(KecamatanModel::class, 'id_kecamatan');
    }
}
