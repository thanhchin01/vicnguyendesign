<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class DesignRequest extends FormRequest
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
            'fullname'               => 'required|string|max:225',
            'email'                  => 'required|string|max:225',
            'job'                    => 'nullable|string|max:225',
            'age'                    => 'nullable|string|max:225',
            'phone'                  => 'required|string|max:225',
            'project_type'           => 'required|string|max:225',
            'area'                   => 'required|string|max:225',
            'scale'                  => 'required|string|max:225',
            'location'               => 'required|string|max:225',
            'investment_cost'        => 'required|string|max:225',
            'people'                 => 'required|string|max:225',
            'expected_rooms'         => 'required|string|max:225',
            'other_construction'     => 'nullable|string',
            'function_description'   => 'nullable|string',
            'design_speed'           => 'required|string|max:225',
            'complete_speed'         => 'required|string|max:225',
            'habits'                 => 'nullable|string',
            'content'                => 'nullable|string'
        ];
    }
}
