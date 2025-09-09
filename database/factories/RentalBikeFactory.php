<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RentalBike;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RentalBike>
 */
class RentalBikeFactory extends Factory
{
    protected $model = RentalBike::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['mountain', 'road', 'hybrid', 'electric', 'cruiser', 'bmx', 'gravel', 'kids'];
        $brands = ['Trek', 'Specialized', 'Giant', 'Cannondale', 'Electra', 'Haro', 'Scott', 'Bianchi'];
        $colors = ['Black', 'White', 'Red', 'Blue', 'Green', 'Yellow', 'Orange', 'Purple', 'Silver', 'Carbon'];
        $sizes = ['XS', 'S', 'M', 'L', 'XL'];
        $statuses = ['available', 'rented', 'maintenance', 'out_of_service'];
        $conditions = ['excellent', 'good', 'fair', 'poor'];
        $locations = [
            'Hanoi Central Station',
            'District 1 Hub',
            'Tech Park Station',
            'Ba Dinh District',
            'Hoan Kiem Station',
            'West Lake Station',
            'Family Park Station',
            'Premium Station',
            'Service Center'
        ];

        $type = $this->faker->randomElement($types);
        $brand = $this->faker->randomElement($brands);
        $isElectric = $type === 'electric';

        // Giá cả dựa trên loại xe
        $baseHourlyRate = match($type) {
            'electric' => $this->faker->numberBetween(100000, 150000),
            'road' => $this->faker->numberBetween(70000, 90000),
            'mountain' => $this->faker->numberBetween(60000, 80000),
            'gravel' => $this->faker->numberBetween(65000, 75000),
            'hybrid' => $this->faker->numberBetween(40000, 60000),
            'cruiser' => $this->faker->numberBetween(35000, 45000),
            'bmx' => $this->faker->numberBetween(30000, 40000),
            'kids' => $this->faker->numberBetween(20000, 30000),
            default => $this->faker->numberBetween(40000, 60000),
        };

        $features = $this->getFeaturesByType($type);
        $model = $this->getModelByBrand($brand, $type);

        return [
            'name' => $this->faker->words(3, true) . ' ' . $type,
            'model' => $model,
            'brand' => $brand,
            'description' => $this->faker->paragraph(2),
            'color' => $this->faker->randomElement($colors),
            'size' => $this->faker->randomElement($sizes),
            'type' => $type,
            'hourly_rate' => $baseHourlyRate,
            'daily_rate' => $baseHourlyRate * 6,
            'weekly_rate' => $baseHourlyRate * 35,
            'monthly_rate' => $baseHourlyRate * 120,
            'features' => $features,
            'images' => [
                'https://example.com/bikes/' . strtolower($brand) . '-' . $this->faker->uuid . '.jpg',
                'https://example.com/bikes/' . strtolower($brand) . '-' . $this->faker->uuid . '.jpg',
            ],
            'status' => $this->faker->randomElement($statuses),
            'condition' => $this->faker->randomElement($conditions),
            'battery_level' => $isElectric ? $this->faker->numberBetween(20, 100) : null,
            'location' => $this->faker->randomElement($locations),
            'qr_code' => 'BIKE_' . strtoupper($this->faker->unique()->bothify('???###')),
            'last_maintenance_date' => $this->faker->dateTimeBetween('-60 days', '-5 days'),
            'next_maintenance_date' => $this->faker->dateTimeBetween('+30 days', '+120 days'),
            'total_ride_hours' => $this->faker->numberBetween(0, 200),
            'total_distance' => $this->faker->randomFloat(1, 0, 2000),
            'is_active' => $this->faker->boolean(90), // 90% chance of being active
        ];
    }

    /**
     * Indicate that the bike is available.
     */
    public function available(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'available',
            'condition' => $this->faker->randomElement(['excellent', 'good']),
            'is_active' => true,
        ]);
    }

    /**
     * Indicate that the bike is currently rented.
     */
    public function rented(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'rented',
            'is_active' => true,
        ]);
    }

    /**
     * Indicate that the bike is under maintenance.
     */
    public function maintenance(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'maintenance',
            'location' => 'Service Center',
        ]);
    }

    /**
     * Indicate that the bike is electric.
     */
    public function electric(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'electric',
            'battery_level' => $this->faker->numberBetween(50, 100),
            'hourly_rate' => $this->faker->numberBetween(100000, 150000),
            'features' => [
                '250W Motor',
                'Lithium Battery',
                'LCD Display',
                'USB Charging',
                'GPS Tracking',
                'Anti-theft System'
            ],
        ]);
    }

    /**
     * Indicate that the bike is a mountain bike.
     */
    public function mountain(): static
    {
        return $this->state(fn (array $attributes) => [
            'type' => 'mountain',
            'features' => [
                'Full Suspension',
                'Disc Brakes',
                'Off-road Tires',
                'Shock Absorbers',
                'Trail Ready'
            ],
        ]);
    }

    /**
     * Get features based on bike type.
     */
    private function getFeaturesByType(string $type): array
    {
        return match($type) {
            'electric' => [
                '250W Motor',
                'Lithium Battery',
                'LCD Display',
                'USB Charging Port',
                $this->faker->randomElement(['GPS Tracking', 'Anti-theft System', 'Smart Phone App'])
            ],
            'mountain' => [
                'Full Suspension',
                'Disc Brakes',
                'Off-road Tires',
                $this->faker->randomElement(['Shock Absorbers', 'Trail Ready', 'Rock Shox Fork'])
            ],
            'road' => [
                'Lightweight Frame',
                'Drop Handlebars',
                'Racing Geometry',
                $this->faker->randomElement(['Carbon Fork', 'Aerodynamic Design', 'Quick Release'])
            ],
            'hybrid' => [
                'Comfortable Saddle',
                'Upright Position',
                'Versatile Tires',
                $this->faker->randomElement(['Fender Ready', 'Rack Mounts', 'LED Lights'])
            ],
            'cruiser' => [
                'Comfort Seat',
                'Swept Handlebars',
                'Coaster Brake',
                $this->faker->randomElement(['Chain Guard', 'Classic Style', 'Wide Tires'])
            ],
            'bmx' => [
                'Steel Frame',
                'Single Speed',
                'Freestyle Ready',
                $this->faker->randomElement(['Stunt Pegs', 'Strong Wheels', 'Compact Design'])
            ],
            'gravel' => [
                'Gravel Tires',
                'Disc Brakes',
                'Adventure Ready',
                $this->faker->randomElement(['Multiple Mounts', 'All Weather', 'Stable Geometry'])
            ],
            'kids' => [
                'Lightweight',
                'Easy Shifting',
                'Safety Features',
                $this->faker->randomElement(['Training Wheels Ready', 'Bright Colors', 'Size Appropriate'])
            ],
            default => [
                'Standard Features',
                'Reliable Components',
                'Easy Maintenance'
            ]
        };
    }

    /**
     * Get model based on brand and type.
     */
    private function getModelByBrand(string $brand, string $type): string
    {
        $models = [
            'Trek' => [
                'mountain' => ['X-Caliber 9', 'Fuel EX 5', 'Remedy 8'],
                'road' => ['Émonda ALR 5', 'Domane AL 3', 'Madone SLR 6'],
                'hybrid' => ['FX 3 Disc', 'Verve 2', 'Dual Sport 3'],
                'electric' => ['Allant+ 7', 'Verve+ 2', 'Super Commuter+ 8S'],
                'gravel' => ['Checkpoint ALR 5', 'Crockett 5 Disc'],
                'kids' => ['Precaliber 24', 'Wahoo 24', 'MT 60']
            ],
            'Specialized' => [
                'mountain' => ['Rockhopper Elite', 'Stumpjumper Comp', 'Epic Hardtail'],
                'road' => ['Allez Elite', 'Roubaix Comp', 'Tarmac SL6'],
                'hybrid' => ['Sirrus X 4.0', 'Crosstrail Elite', 'Vita Elite'],
                'electric' => ['Turbo Vado SL 4.0', 'Como 4.0', 'Creo SL Comp'],
                'gravel' => ['Diverge Elite E5', 'Sequoia Elite'],
                'kids' => ['Riprock 24', 'Hotrock 24', 'Jett 24']
            ],
            'Giant' => [
                'mountain' => ['Talon 3', 'Stance 2', 'Trance X 3'],
                'road' => ['Contend 3', 'Defy Advanced 3', 'TCR Advanced 2'],
                'hybrid' => ['Escape 3', 'Roam 3', 'ToughRoad SLR 2'],
                'electric' => ['Explore E+ 2', 'Quick-E+ 2', 'Road-E+ 1'],
                'kids' => ['XtC Jr 24', 'ARX 24', 'Animator 24']
            ]
        ];

        $brandModels = $models[$brand] ?? [];
        $typeModels = $brandModels[$type] ?? [$type . ' Model'];

        return $this->faker->randomElement($typeModels);
    }
}
