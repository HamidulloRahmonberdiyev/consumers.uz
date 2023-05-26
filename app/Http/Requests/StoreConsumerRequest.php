<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsumerRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Ism kiriting!',
            'surname' => 'Familiya kiriting!',
            'phone.required' => 'Telefon raqam kiriting!',
            'address_id.required' => 'Manzil kiriting!',
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
            'phone' => ['required', 'string', 'max:15'],
            'address_id' => ['required'],
        ];
    }
}
