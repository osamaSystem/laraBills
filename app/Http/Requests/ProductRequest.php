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
        return  [
            'product_name'=> 'required|max:50',
            'product_price'=> 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'product_name.required'=> 'لابد من ادخال اسم الصنف',
            'product_name.max'=> 'يقبل فقط 50 حرف او اقل',
            'product_price.required'=> 'لابد من ادخال السعر',
            'product_price.numeric'=> 'لابد من ان يكون السعر ارقام'
        ];
    }
}
