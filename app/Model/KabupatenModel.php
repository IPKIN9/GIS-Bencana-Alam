<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KabupatenModel extends Model
{
    protected $table = "kabupaten";
    protected $fillable = [
        'id',
        'nama_kabupaten',
        'created_at',
        'updated_at'
    ];
}
