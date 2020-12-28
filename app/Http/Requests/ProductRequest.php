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
        $rules = [
            'code' => 'required|min:3|max:200|unique:products,code',
            'name' => 'required|min:3|max:200',
            'description' => 'required|min:5',
            'price' => 'required|numeric|min:1',
        ];

        if ($this->route()->named('products.update')) {
            $rules['code'] .= ',' . $this->route()->parameter('product')->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [
//            'required' => 'Поле :attribute обязятельно для ввода.',
            'required' => 'Поле обязятельно для ввода.',
            'min' => 'Введите больше :min символов.',
            'max' => 'Введите меньше :max символов.',
            'code.max' => 'В поле :attribute не должно быть более :max символов.'
        ];
    }
}
