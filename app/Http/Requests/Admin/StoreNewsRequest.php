<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'title'             => 'required|string|max:225',
            'image'             => 'required|string|max:225',
            'sumary'            => 'required|string',
            'date'              => 'required|date',
            'content'           => 'required|string',
            'new_category_id'   => 'required|integer'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'             => 'Tiêu đề không được để trống',
            'image.required'             => 'Hình ảnh không được để trống',
            'sumary.required'            => 'Mô tả ngắn không được để trống',
            'date.required'              => 'Ngày tạo không được để trống',
            'date.date'                  => 'Ngày tạo không hợp lệ',
            'new_category_id'            => 'Vui lòng chọn danh mục tin tức'
        ];
    }
}
