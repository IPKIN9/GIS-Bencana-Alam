<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KasusModel extends Model
{
    protected $table = 'kasus';
    protected $fillable = [
        'id', 'id_bahaya', 'code_bahaya', 'id_kabupaten', 'id_kacamatan', 'kode_kecamatan',  'created_at', 'updated_at'
    ];

    public function kabupaten_rol()
    {
        return $this->belongsTo(KabupatenModel::class, 'id_kabupaten');
    }
    public function kecamatan_rol()
    {
        return $this->belongsTo(KecamatanModel::class, 'id_kecamatan');
    }
    public function bahaya_rol()
    {
        return $this->belongsTo(BahayaModel::class, 'id_bahaya');
    }
}
