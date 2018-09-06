<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|max:50',
            'p_id'  => 'between:1,2|required',//bladeから修正する
            'body'  => 'required',
            'body_code' => ''
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須入力です。',
            'title.max'      => 'タイトルは50文字以内にしてください。',
            'p_id.required'  => 'カテゴリーは必須選択です。',
            'body.required`' => '本文は必須入力です。'
        ];
    }
}
