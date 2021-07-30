<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KecamatanRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_kecamatan' => 'required|unique:kecamatan,nama_kecamatan',
            'id_kabupaten' => 'required',
            'koordinat' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Field ini tidak boleh kosong',
            'unique' => 'Data ini sudah tersedia'
        ];
    }
}
