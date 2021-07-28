<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContohRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required',
            'ket' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Field tidak boleh kosong'
        ];
    }
}
