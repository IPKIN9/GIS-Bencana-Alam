<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KasusRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_bahaya' => 'required',
            'id_kabupaten' => 'required',
            'id_kecamatan' => 'required',
            'code_bahaya' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Field ini tidak boleh kosong'
        ];
    }
}
