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
            'first-name' => ['required'],
            'last-name' => ['required'],
            'gender' => ['required'],
            'email' => ['required'],
            'tel' => ['required'],
            'address' => ['required'],
            'detail[type]' => ['required'],
            'detail[message]' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'first-name.required' => '姓を入力してください',
            'last-name.required' => '名を入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'tel.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'detail[type].required' => 'お問い合わせ内容を入力してください',
            'detail[message].required' => 'お問い合わせ内容を入力してください',

        ];
    }
}
