<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AllBillRequest extends FormRequest
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
            'product'=> 'required|max:50',
            'amount'=> 'required|numeric',
            'total_price'=> 'numeric',
            'date'=> 'required',
            'customer'=> 'required|max:50',
            'migrator'=> 'required|max:70'
        ];
    }

    public function messages()
    {
        return [
            'product.required'=> 'لابد من اختيار صنف',
            'amount.required'=> 'لابد من تحديد الكمية المطلوبة',
            'amount.numeric'=> 'لابد ان تكون الكمية ارقام',
            'total_price.numeric'=> 'لابد من ان يكون السعر ارقام',
            'date.required'=> 'لابد من تحديد تاريخ للفاتورة',
            'customer.required'=> 'لابد من ادخال اسم المشتري',
            'customer.max'=>  'يقبل فقط 50 حرف او اقل',
            'migrator.required'=> 'لابد من ادخال اسم الترحيلات',
            'migrator.max'=>  'يقبل فقط 70 حرف او اقل'
        ];

    }
}
