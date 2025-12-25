<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
            'title'                => 'required|string|max:225',
            'image'                => 'nullable|string|max:225',
            'sumary'               => 'required|string',
            'date'                 => 'required|date',
            'content'              => 'nullable|string',
            'new_category_id'      => 'required|integer'
        ];
    }
}
