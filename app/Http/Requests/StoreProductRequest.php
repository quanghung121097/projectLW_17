<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'category_id'   => 'integer',
            'content'   =>  'required',
            'origin_price' => 'required|numeric',
            'sale_price'   => 'required|numeric',
            'images.*' => 'image|max:2000',
            'images' => 'required',
            'status'    =>  'in:1,-1,0',
        ];

    }
    public function messages()
    {
        return ['required' => ':attribute Không được để trống',
                'images.required' => ':attribute Không được để trống',
                'integer' => 'chọn :attribute',
                'min' => ':attribute Không được nhỏ hơn :min',
                'max' => ':attribute Không được lớn hơn :max',
                'image' => ':attribute Không đúng định dạng',
                'in' => 'chọn :attribute',];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return ['name' => 'Tên sản phẩm',
                'origin_price' => 'Giá gốc',
                'sale_price' => 'Giá bán',
                'content' => 'Mô tả sản Phẩm',
                'category_id' => 'Danh mục sản Phẩm',
                'images' => 'Ảnh sản phẩm',
                'status'    => 'trạng thái sản phẩm'];
    }
}
