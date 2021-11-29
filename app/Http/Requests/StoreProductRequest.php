<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'image' => 'required',
            'desc' => 'required',
            'price' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống!',
            'image.required' => 'Không được để trống!',
            'desc.required' => 'Không được để trống!',
            'price.required' => 'Không được để trống!',
        ];
    }
}
