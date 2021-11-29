<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống',
            'email.required' => 'Không được để trông',
            'password.required' => 'Không được để trống',
            'email.unique' => 'Email đã tôn tại',
            'password.min' => 'Mậu khẩu phải có ít nhất 6 ký tự'
        ];
    }
}
