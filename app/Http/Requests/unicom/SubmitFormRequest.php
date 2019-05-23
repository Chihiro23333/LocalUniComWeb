<?php

namespace App\Http\Requests\unicom;

use Illuminate\Foundation\Http\FormRequest;

class SubmitFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            'name'=>[
                'required','string','between:2,5'
            ],
            'phone'=>['required','string','size:11','unique:user_apply,mobile'],
            'cardnum'=>['required','string','size:18'],
            'addr'=>['required','string'],
            'email'=>['required','email'],
            'feeset'=>['required','size:2']
        ];
    }
    public function attributes(){
        return [
            'name' => '姓名',
            'phone' => '手机号',
            'cardnum' => '身份证号',
            'addr' => '地址',
            'email'=>'邮箱地址',
            'feeset'=>'套餐类型'
        ];
    }
}
