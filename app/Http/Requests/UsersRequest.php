<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name'=>'required|min:5|max:20',
            'username'=>'required|unique:users,username|min:5|max:20',
            'password'=>'required|confirmed|min:5|max:15'
        ];
    }
    public function messages()
    {
        return[
            'required'=>'Field ini tidak boleh kosong',
            'full_name.min'=>'Nama terlalu pendek',
            'full_name.max'=>'Nama terlalu panjang',
            'unique'=>'Username sudah digunakan',
            'username.min'=>'Username terlalu pendek',
            'username.max'=>'Username terlalu panjang',
            'confirmed'=>'Konfirmasi Password tidak sama '
        ];
    }
}
