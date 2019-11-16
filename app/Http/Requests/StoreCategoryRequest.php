<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name'         => 'required|max:255|min:2',
            'parent_id'   => 'required|integer',
            'logo'   =>  'required|image|max:2000',
            'depth' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return ['required' => ':attribute Không được để trống',
                'integer' => 'chọn :attribute',
                'min' => ':attribute Không được nhỏ hơn :min',
                'max' => ':attribute Không được lớn hơn :max',
                'image' => ':attribute Không đúng định dạng ảnh',
                'numeric' => ':attribute không đúng định dạng'
                ];
    }
}
