<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KabupatenRequest extends FormRequest
{
        public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_kabupaten'=>'required',
            'id_kecamatan'=>'required'
        ];
    }

    public function messages()
    {
        return[
            'required'=>'field ini tidak boleh kosong'
        ];
    }
}
