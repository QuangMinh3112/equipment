<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'user_name' => 'required|unique:users,user_name',
            'full_name' => 'required',
            'date_of_birth' => 'required|date',
            'identity_card' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'account_code' => 'required|string|unique:users,account_code',
            'role' => 'required',
            'status' => 'nullable',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'created_by' => 'nullable|integer',
        ];
    }
    public function messages(): array
    {
        return [
            'required' => ':attribute không được để trống.',
            'unique' => ':attribute đã tồn tại.',
            'email' => ':attribute phải là một địa chỉ email hợp lệ.',
            'date' => ':attribute phải là một ngày hợp lệ.',
            'min' => ':attribute phải có ít nhất :min ký tự.',
        ];
    }
    public function attributes()
    {
        return [
            'user_name' => 'Tên đăng nhập',
            'full_name' => 'Họ và tên',
            'date_of_birth' => 'Ngày sinh',
            'identity_card' => 'Số CMND',
            'address' => 'Địa chỉ',
            'phone_number' => 'Số điện thoại',
            'account_code' => 'Mã tài khoản',
            'role' => 'Vai trò',
            'status' => 'Trạng thái',
            'email' => 'Địa chỉ email',
            'password' => 'Mật khẩu',
        ];
    }
}
