<?php

namespace App\Services;

use App\Models\BikeComponent;
use App\Models\BikeComponentHistory;
use App\Models\ComponentTemplate;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ComponentHealthCalculatorService
{
    /**
     * Calculate health percentage for a component.
     *
     * Formula:
     * - Wear_km = (current_odo - installed_odo) / interval_km * 100
     * - Wear_days = (days_elapsed) / interval_days * 100
     * - Wear_actual = max(Wear_km, Wear_days)
     * - Health = max(0, 100 - Wear_actual)
     *
     * Status rules:
     * - Health > 20: good
     * - 5 <= Health <= 20: warning
     * - Health < 5: critical
     * - Health == 0 (wear >= 100%): expired
     */
    public function calculateHealth(BikeComponent $component, int $currentOdo): array
    {
        $wearKm = 0;
        $wearDays = 0;

        if ($component->interval_km && $component->interval_km > 0) {
            $kmUsed = max(0, $currentOdo - $component->installed_odo);
            $wearKm = ($kmUsed / $component->interval_km) * 100;
        }

        if ($component->interval_days && $component->interval_days > 0) {
            $daysElapsed = max(0, Carbon::parse($component->installed_date)->diffInDays(Carbon::today()));
            $wearDays = ($daysElapsed / $component->interval_days) * 100;
        }

        $wearActual = max($wearKm, $wearDays);
        $health = max(0, round(100 - $wearActual, 2));

        $status = $this->determineStatus($health, $wearActual);

        return [
            'health_percentage' => $health,
            'wear_km_percentage' => round($wearKm, 2),
            'wear_days_percentage' => round($wearDays, 2),
            'status' => $status,
        ];
    }

    /**
     * Determine component status based on health score.
     */
    public function determineStatus(float $health, float $wearActual): string
    {
        if ($wearActual >= 100) {
            return 'expired';
        }
        if ($health < 5) {
            return 'critical';
        }
        if ($health <= 20) {
            return 'warning';
        }
        return 'good';
    }

    /**
     * Get all components for a bike with calculated health.
     */
    public function getComponentsWithHealth(int $bikeId, int $currentOdo): array
    {
        $components = BikeComponent::where('bike_id', $bikeId)->get();

        return $components->map(function (BikeComponent $component) use ($currentOdo) {
            $healthData = $this->calculateHealth($component, $currentOdo);

            // Update status in DB if changed
            if ($component->status !== $healthData['status']) {
                $component->update(['status' => $healthData['status']]);
            }

            return array_merge($component->toArray(), $healthData);
        })->toArray();
    }

    /**
     * Apply component template for a bike type.
     */
    public function applyTemplate(int $bikeId, string $bikeType, int $currentOdo): array
    {
        $templates = ComponentTemplate::where('bike_type', $bikeType)->get();

        if ($templates->isEmpty()) {
            return [];
        }

        $components = [];
        $today = Carbon::today()->toDateString();

        foreach ($templates as $template) {
            // Skip if component already exists for this bike
            $exists = BikeComponent::where('bike_id', $bikeId)
                ->where('component_key', $template->component_key)
                ->exists();

            if ($exists) {
                continue;
            }

            $components[] = BikeComponent::create([
                'bike_id' => $bikeId,
                'component_key' => $template->component_key,
                'custom_name' => $template->name_vi,
                'installed_odo' => $currentOdo,
                'installed_date' => $today,
                'interval_km' => $template->default_interval_km,
                'interval_days' => $template->default_interval_days,
                'status' => 'good',
            ]);
        }

        return $components;
    }

    /**
     * Replace a component: archive old one to history, reset the component.
     */
    public function replaceComponent(BikeComponent $component, array $data): BikeComponent
    {
        return DB::transaction(function () use ($component, $data) {
            // Create history record
            BikeComponentHistory::create([
                'bike_id' => $component->bike_id,
                'component_key' => $component->component_key,
                'old_part_name' => $component->custom_name,
                'new_part_name' => Arr::get($data, 'new_part_name', $component->custom_name),
                'replaced_odo' => Arr::get($data, 'replaced_odo', 0),
                'replaced_date' => Arr::get($data, 'replaced_date', Carbon::today()->toDateString()),
                'cost' => Arr::get($data, 'cost', 0),
                'garage_name' => Arr::get($data, 'garage_name'),
                'receipt_image_path' => Arr::get($data, 'receipt_image_path'),
                'notes' => Arr::get($data, 'notes'),
            ]);

            // Reset the component
            $component->update([
                'custom_name' => Arr::get($data, 'new_part_name', $component->custom_name),
                'specifications' => Arr::get($data, 'specifications', $component->specifications),
                'installed_odo' => Arr::get($data, 'replaced_odo', 0),
                'installed_date' => Arr::get($data, 'replaced_date', Carbon::today()->toDateString()),
                'warranty_months' => Arr::get($data, 'warranty_months', 0),
                'warranty_expiry_date' => Arr::get($data, 'warranty_months', 0) > 0
                    ? Carbon::parse(Arr::get($data, 'replaced_date', Carbon::today()))
                        ->addMonths(Arr::get($data, 'warranty_months', 0))
                        ->toDateString()
                    : null,
                'status' => 'good',
                'notes' => Arr::get($data, 'notes'),
            ]);

            return $component->fresh();
        });
    }
}
