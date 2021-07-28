<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Message;
use Illuminate\Foundation\Http\FormRequest;

class JenisBahayaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_jenis_bahaya' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'field ini tidak boleh kosong'
        ];
    }
}
