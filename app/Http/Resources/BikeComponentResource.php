<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BikeComponentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'bike_id' => $this->bike_id,
            'component_key' => $this->component_key,
            'custom_name' => $this->custom_name,
            'specifications' => $this->specifications,
            'installed_odo' => $this->installed_odo,
            'installed_date' => $this->installed_date?->toDateString(),
            'interval_km' => $this->interval_km,
            'interval_days' => $this->interval_days,
            'warranty_months' => $this->warranty_months,
            'warranty_expiry_date' => $this->warranty_expiry_date?->toDateString(),
            'status' => $this->status,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
