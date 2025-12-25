<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'fullname'      => 'required|string|max:225',
            'email'         => 'required|email',
            'username'      => 'required|string|max:225',
            'phone'         => 'required|string|max:11',
            'gender'        => 'required|in:0,1',
            'date_of_birth' => 'nullable|date',
            'avatar'        => 'nullable|string|max:255'
        ];
    }

    public function messages(): array
    {
        return [

        ];
    }
}
