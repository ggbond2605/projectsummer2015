<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class RegisterRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'telephone' => 'required'
        ];
    }
}
