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
            'email'                  => 'required|email|max:225',
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
    public function messages():array
    {
        return [
            'fullname.required'        => 'Vui lòng nhập họ và tên',
            'email.email'              => 'Email không hợp lệ',
            'email.required'           => 'Vui lòng nhập email',
            'phone.required'           => 'Vui lòng nhập số điện thoại',
            'project_type.required'    => 'Bạn chưa nhập loại hình dự án',
            'area.required'            => 'Bạn chưa nhập diện tích dự án',
            'scale.required'           => 'Bạn chưa nhập quy mô dự án',
            'location.required'        => 'Bạn chưa nhập địa điểm dự án',
            'investment_cost.required' => 'Bạn chưa nhập chi phí dự trù',
            'people.required'          => 'Bạn chưa nhập thông tin số người sinh hoạt',
            'expected_rooms.required'  => 'Bạn chưa nhập số phòng chức năng mong muốn',
            'design_speed.required'    => 'Bạn chưa nhập tiến độ thiết kế mong muốn',
            'complete_speed.required'  => 'Bạn chưa nhập tiến độ hoàn thiện mong muốn',
        ];
    }
}
