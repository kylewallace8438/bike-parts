<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RentalBike;

class RentalBikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bikes = [
            [
                'name' => 'KTM Duke 390',
                'model' => 'KTM Duke 390',
                'brand_id' => rand(1, 10),
                'description' => 'High-performance street bike perfect for trail adventures. Features advanced suspension and durable frame.',
                'color' => 'Matte Black',
                'type' => 'street',
                'hourly_rate' => 75000,
                'daily_rate' => 450000,
                'weekly_rate' => 2800000,
                'monthly_rate' => 10500000,
                'features' => [
                    'Liquid-cooled Engine',
                    'ABS Brakes',
                    'LED Headlights',
                    'Digital Display',
                    'Adjustable Suspension'
                ],
                'images' => [
                    'https://example.com/bikes/ktm-duke-390-1.jpg',
                    'https://example.com/bikes/ktm-duke-390-2.jpg',
                    'https://example.com/bikes/ktm-duke-390-3.jpg'
                ],
                'status' => 'available',
                'qr_code' => 'BIKE_001',
                'is_active' => true,
            ],
            [
                'name' => 'KTM ADV 390',
                'model' => 'KTM ADV 390',
                'brand_id' => rand(1, 10),
                'description' => 'Comfortable city bike ideal for urban commuting and leisure rides. Lightweight aluminum frame with ergonomic design.',
                'color' => 'Sky Blue',
                'type' => 'hybrid',
                'hourly_rate' => 55000,
                'daily_rate' => 320000,
                'weekly_rate' => 2100000,
                'monthly_rate' => 7800000,
                'features' => [
                    'Lightweight Aluminum Frame',
                    'Comfort Saddle',
                    'LED Lights',
                    'Kickstand',
                    'Fenders'
                ],
                'images' => [
                    'https://example.com/bikes/specialized-sirrus-1.jpg',
                    'https://example.com/bikes/specialized-sirrus-2.jpg'
                ],
                'status' => 'available',
                'qr_code' => 'BIKE_002',
                'is_active' => true,
            ],
        ];

        foreach ($bikes as $bikeData) {
            RentalBike::updateOrCreate([
                'qr_code' => $bikeData['qr_code']
            ], $bikeData);
        }

        $this->command->info('Rental bikes seeded successfully! Created ' . count($bikes) . ' bikes.');

        // Display summary
        $statusCounts = [
            'available' => collect($bikes)->where('status', 'available')->count(),
            'rented' => collect($bikes)->where('status', 'rented')->count(),
            'maintenance' => collect($bikes)->where('status', 'maintenance')->count(),
            'out_of_service' => collect($bikes)->where('status', 'out_of_service')->count(),
        ];

        $this->command->info('Status distribution:');
        foreach ($statusCounts as $status => $count) {
            $this->command->info("  - {$status}: {$count} bikes");
        }

        $typeCounts = collect($bikes)->groupBy('type')->map->count();
        $this->command->info('Type distribution:');
        foreach ($typeCounts as $type => $count) {
            $this->command->info("  - {$type}: {$count} bikes");
        }
    }
}
