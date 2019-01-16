<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainRequest extends FormRequest
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
            //
            'model'  => 'required|min:2|max:255',
        ];
    }

    public function messages(){
        return [
            'required' => '「:attribute」為必填欄位',
            'min'      => '「:attribute」至少要 :min 個字',
            'max'      => '「:attribute」最多只能 :max 個字',
        ];

    }
    public function attributes(){
        return [
            'model'      => '車型',
        ];
    }
}