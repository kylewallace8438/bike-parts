<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyComponentTemplateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'bike_type' => 'required|string|in:scooter,manual,underbone_clutch,sport_cruiser',
            'current_odo' => 'required|integer|min:0',
        ];
    }
}
