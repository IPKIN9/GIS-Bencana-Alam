<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KasusModel extends Model
{
    protected $table = 'kasus';
    protected $fillable = [
        'id', 'id_kabupaten', 'id_kacamatan', 'id_jenis_bahaya',
        'total_luas_bahaya', 'id_kelas', 'total_kerugian',
        'kelas_kerugian', 'kelas_kerusakan', 'created_at', 'updated_at'
    ];

    public function kabupaten_rol()
    {
        return $this->belongsTo(KabupatenModel::class, 'id_kabupaten');
    }
    public function kecamatan_rol()
    {
        return $this->belongsTo(KabupatenModel::class, 'id_kecamatan');
    }
    public function jenis_bahaya_rol()
    {
        return $this->belongsTo(JenisBahayaModel::class, 'id_jenis_bahaya');
    }
    public function kelas_rol()
    {
        return $this->belongsTo(KelasModel::class, 'id_kelas', 'kelas_kerugian', 'kelas_kerusakan');
    }
}
