<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
}
