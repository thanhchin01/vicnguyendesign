<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StrorePortfolioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Được phép sử dụng request này
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
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|string|max:255',
            'content'     => 'nullable|string',
            'album_id'    => 'required|integer',
            'status'      => 'required|in:0,1',
        ];
    }

    public function messages(): array
    {
        return [
            'title.requỉed' => 'Tiêu đề không được để trống',
            'album_id.required' => 'Vui lòng chọn danh mục',
        ];
    }
}
