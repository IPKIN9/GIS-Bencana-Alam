<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KecamatanModel extends Model
{
    protected $table = 'kecamatan';
    protected $fillable = [
        'id',
        'kode',
        'nama_kecamatan',
        'id_kabupaten',
        'koordinat',
        'created_at',
        'deleted_at'
    ];
    public function kabupaten_role()
    {
        return $this->belongsTo(KabupatenModel::class, 'id_kabupaten');
    }

    public function bahaya_rol()
    {
        return $this->hasMany(BahayaModel::class, 'id_bahaya', 'id');
    }
}
