<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name_kana' => 'required',
            'contents' => 'required',
        ];
    }
 
    public function messages()
    {
        return [
            'name.required' => '名前を入力して下さい。',
            'name_kana.required' => '名前(かな)を入力して下さい。',
            'contents.required' => 'お問合せ内容を入力して下さい。',
        ];
    }
}
