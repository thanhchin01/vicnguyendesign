<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StroreProjectRequest extends FormRequest
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
            'title'                    => 'required|string|max:225',
            'image_url'                => 'required|string|max:225',
            'description'              => 'required|string',
            'address'                  => 'required|string',
            'date'                     => 'required|date',
            'acreage'                  => 'required|string',
            'team_design'              => 'required|string',
            'category_id'              => 'required|integer',
            'status'                   => 'required|in:0,1',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required'            => 'Vui lòng nhập tên dự án',
            'description.required'      => 'Vui lòng nhập mô tả dự án',
            'address.required'          => 'Vui lòng nhập địa chỉ',
            'date.required'             => 'Ngày tạo không được để trống',
            'date.date'                 => 'Ngày tạo không hợp lệ',
            'acreage.required'          => 'Vui lòng nhập diện tích',
            'team_design.required'      => 'Thành viên thiết kế không được để trống',
            'category_id.required'      => 'Vui lòng chọn danh mục dự án',
            'status.required'           => 'Vui lòng chọn trạng thái'
        ];
    }
}
