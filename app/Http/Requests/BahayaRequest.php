<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BahayaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_jenis_bahaya' => 'required',
            'total_luas_bahaya' => 'required|integer',
            'id_kelas' => 'required',
            'jumlah_penduduk_terpapar' => 'required|integer',
            'total_kerugian' => 'required',
            'kelas_kerugian' => 'required',
            'kelas_kerusakan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Field ini tidak boleh kosong',
            'integer' => 'Masukan data dalam bentuk angka',
        ];
    }
}
