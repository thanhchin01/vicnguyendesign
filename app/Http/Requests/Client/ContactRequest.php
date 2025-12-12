<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname'  => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'object'    => 'nullable|string|max:255',
            'message'   => 'nullable',
        ];
    }

    public function messages():array
    {
        return [
            'fullname.required' => 'Vui lòng nhập tên của bạn',
            'email.required'    => 'Vui lòng nhập email của bạn',

        ];
    }
}
