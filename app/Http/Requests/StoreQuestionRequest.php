<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'title.required' => 'Sarlavha kiriting!',
            'content.required' => 'Maqola kiriting!',
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
        ];
    }
}
