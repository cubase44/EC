<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
    }
 
    public function messages()
    {
        return [
            'name.required' => '名前を入力して下さい。',
            'price.required' => '名前(かな)を入力して下さい。',
            'description.required' => 'お問合せ内容を入力して下さい。',
            'image.required' => '写真名を入力して下さい。',
        ];
    }
}
