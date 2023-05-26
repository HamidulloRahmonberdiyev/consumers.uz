<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInformationRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'title.required' => 'Sarlavha kiriting!',
            'content.required' => 'Maqola kiriting!',
            'image.max' => 'Rasm o\'lchami 2 mb dan katta!',
            'image.required' => 'Rasm kiriting!',
            'image.mimes' => 'Rasm turi bizning formatga mos kelmaydi!',
        ];
    }
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255', 'min:3'],
            'content' => ['required', 'string', 'min:5'],
            'image.*' => ['mimes:png,jpg,jpeg,svg', 'image', 'required', 'max:2048'],
        ];
    }
}
