<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePayRequest extends FormRequest
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
            'customer_name'         => 'required|max:255|min:5',
            'customer_phone'   => 'required|numeric',
            'customer_email'   =>  'required|email',
            'customer_address' => 'required',
        ];
    }
    public function messages()
    {
        return ['required' => ':attribute Không được để trống',
        'min' => ':attribute Không được nhỏ hơn :min',
        'max' => ':attribute Không được lớn hơn :max',
        'email' => ':attribute Không đúng định dạng Mail',
        'numeric' => ':attribute nhập vào phải là số',
    ];
}

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'customer_name'         => 'Họ tên',
            'customer_phone'   => 'Số điện thoại',
            'customer_address' => 'Địa chỉ',
        ];
    }
}
