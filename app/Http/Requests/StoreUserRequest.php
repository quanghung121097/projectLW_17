<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name'         => 'required|max:255|min:5',
            'email'   => 'required|email',
            'password'   =>  'required|min:8',
            'phone' => 'required|numeric',
            'avatar' => 'required|image|max:2000',
            'is_admin'    =>  'required|in:1,0',
        ];

    }
    public function messages()
    {
        return [
            'required' => ':attribute Không được để trống',
                'numeric' => ':attribute phải nhập số',
                'min' => ':attribute Không được nhỏ hơn :min',
                'max' => ':attribute Không được lớn hơn :max',
                'image' => ':attribute Không đúng định dạng',
                'in' => 'chọn :attribute',
                'email' => ':attribute phải đúng định dạng'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên user',
            'password' => 'Mật khẩu',
            'phone' => 'Số điện thoại',
            'is_admin'    =>  'Quyền',
        ];
    }
}
