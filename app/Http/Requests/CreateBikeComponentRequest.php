<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBikeComponentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'component_key' => 'required|string|max:255',
            'custom_name' => 'required|string|max:255',
            'specifications' => 'nullable|string|max:255',
            'installed_odo' => 'required|integer|min:0',
            'installed_date' => 'required|date',
            'interval_km' => 'nullable|integer|min:1',
            'interval_days' => 'nullable|integer|min:1',
            'warranty_months' => 'nullable|integer|min:0|max:255',
            'notes' => 'nullable|string',
        ];
    }
}
