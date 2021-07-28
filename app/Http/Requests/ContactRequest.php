<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'alamat'=>'required',
            'kantor_pos'=>'required|numeric',
            'email'=>'required|email',
            'telepon'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return[
            'required'=>'field ini tidak boleh Kosong',
            'email.email'=>'tuliskan email yang valid',
            'numeric'=>'isi menggunakan angka'
        ];
    }
}
