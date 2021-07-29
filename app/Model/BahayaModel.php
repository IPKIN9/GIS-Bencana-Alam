<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BahayaModel extends Model
{
    protected $table = 'bahaya';
    protected $fillable = [
        'id', 'code_bahaya', 'id_jenis_bahaya',
        'total_luas_bahaya', 'id_kelas',
        'jumlah_penduduk_terpapar', 'total_kerugian',
        'kelas_kerugian', 'kelas_kerusakan', 'created_at', 'updated_at'
    ];
    public function jenis_bahaya_rol()
    {
        return $this->belongsTo(JenisBahayaModel::class, 'id_jenis_bahaya');
    }
    public function kelas_rol()
    {
        return $this->belongsTo(KelasModel::class, 'id_kelas', 'kelas_kerugian', 'kelas_kerusakan');
    }
}
