<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBikeComponentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'custom_name' => 'nullable|string|max:255',
            'specifications' => 'nullable|string|max:255',
            'interval_km' => 'nullable|integer|min:1',
            'interval_days' => 'nullable|integer|min:1',
            'warranty_months' => 'nullable|integer|min:0|max:255',
            'notes' => 'nullable|string',
        ];
    }
}
