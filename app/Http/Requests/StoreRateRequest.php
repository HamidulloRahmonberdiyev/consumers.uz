<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRateRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'title.required' => 'Sarlavha kiriting!',
            'price.required' => 'Narx kiriting!',
            'lifetime.required' => 'Muddatini kiriting!',
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
            'price' => ['required', 'string', 'max:255'],
            'lifetime' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'min:5'],
        ];
    }
}
