<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
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
            'name'      => 'required|string|max:255',
            'avatar'    => 'nullable|string|max:255',
            'graduate'  => 'nullable|string',
            'join'      => 'nullable|string',
            'project'   => 'nullable|string',
            'award'     => 'nullable|string',
            'position'  => 'nullable|string|max:255',
            'status'    => 'required|in:0,1',
        ];
    }
}
