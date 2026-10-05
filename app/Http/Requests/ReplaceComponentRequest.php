<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReplaceComponentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'new_part_name' => 'required|string|max:255',
            'specifications' => 'nullable|string|max:255',
            'replaced_odo' => 'required|integer|min:0',
            'replaced_date' => 'required|date',
            'cost' => 'nullable|numeric|min:0',
            'garage_name' => 'nullable|string|max:255',
            'receipt_image_path' => 'nullable|string|max:255',
            'warranty_months' => 'nullable|integer|min:0|max:255',
            'notes' => 'nullable|string',
        ];
    }
}
