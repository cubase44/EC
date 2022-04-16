<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'email' => 'required',
            'tel' => 'required',
            'address' => 'required',
            'card' => 'required',
        ];
    }
 
    public function messages()
    {
        return [
            'name.required' => '名前を入力して下さい。',
            'name_kana.required' => '名前(カナ)を入力して下さい。',
            'email.required' => 'メールアドレスを入力して下さい。',
            'tel.required' => '電話番号を入力して下さい。',
            'address.required' => '発送先住所を入力して下さい。',
            'card.required' => '決済方法を選択して下さい。',
        ];
    }
}
