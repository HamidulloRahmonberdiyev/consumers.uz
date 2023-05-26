<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Ism kiriting!',
            'surname' => 'Familiya kiriting!',
            'email.required' => 'Email kiriting!',
            'phone.required' => 'Telefon raqam kiriting!',
            'password.required' => 'Parol kiriting!',
            'photo.max' => 'Rasm o\'lchami 2 mb dan katta!',
            'photo.mimes' => 'Rasm turi bizning formatga mos kelmaydi!',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'surname' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'string', 'max:15'],
            'password' => ['required', 'string', 'min:8'],
            'photo.*' => ['mimes:png,jpg,jpeg,svg', 'required', 'max:2048'],
        ];
    }
}
