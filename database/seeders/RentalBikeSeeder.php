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
                'name' => 'Mountain Explorer Pro',
                'model' => 'X-Caliber 9',
                'brand' => 'Trek',
                'description' => 'High-performance mountain bike perfect for trail adventures. Features advanced suspension and durable frame.',
                'color' => 'Matte Black',
                'size' => 'L',
                'type' => 'mountain',
                'hourly_rate' => 75000,
                'daily_rate' => 450000,
                'weekly_rate' => 2800000,
                'monthly_rate' => 10500000,
                'features' => [
                    'Full Suspension',
                    'Shimano Deore XT',
                    'Tubeless Ready',
                    'Hydraulic Disc Brakes',
                    'Carbon Fork'
                ],
                'images' => [
                    'https://example.com/bikes/trek-xcaliber-1.jpg',
                    'https://example.com/bikes/trek-xcaliber-2.jpg',
                    'https://example.com/bikes/trek-xcaliber-3.jpg'
                ],
                'status' => 'available',
                'condition' => 'excellent',
                'location' => 'Hanoi Central Station',
                'qr_code' => 'BIKE_001',
                'last_maintenance_date' => now()->subDays(15),
                'next_maintenance_date' => now()->addDays(75),
                'total_ride_hours' => 45,
                'total_distance' => 380.5,
                'is_active' => true,
            ],
            [
                'name' => 'City Cruiser Elite',
                'model' => 'Sirrus X 4.0',
                'brand' => 'Specialized',
                'description' => 'Comfortable city bike ideal for urban commuting and leisure rides. Lightweight aluminum frame with ergonomic design.',
                'color' => 'Sky Blue',
                'size' => 'M',
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
                'condition' => 'excellent',
                'location' => 'District 1 Hub',
                'qr_code' => 'BIKE_002',
                'last_maintenance_date' => now()->subDays(8),
                'next_maintenance_date' => now()->addDays(82),
                'total_ride_hours' => 28,
                'total_distance' => 156.2,
                'is_active' => true,
            ],
            [
                'name' => 'Electric Power Bike',
                'model' => 'Turbo Vado SL 4.0',
                'brand' => 'Specialized',
                'description' => 'Advanced electric bike with powerful motor and long-lasting battery. Perfect for long-distance rides and hill climbing.',
                'color' => 'Forest Green',
                'size' => 'L',
                'type' => 'electric',
                'hourly_rate' => 120000,
                'daily_rate' => 750000,
                'weekly_rate' => 4800000,
                'monthly_rate' => 18000000,
                'features' => [
                    '250W Motor',
                    '90km Range',
                    'GPS Tracking',
                    'USB Charging Port',
                    'Anti-theft System',
                    'Smart Display'
                ],
                'images' => [
                    'https://example.com/bikes/specialized-turbo-1.jpg',
                    'https://example.com/bikes/specialized-turbo-2.jpg',
                    'https://example.com/bikes/specialized-turbo-3.jpg'
                ],
                'status' => 'available',
                'condition' => 'excellent',
                'battery_level' => 85,
                'location' => 'Tech Park Station',
                'qr_code' => 'BIKE_003',
                'last_maintenance_date' => now()->subDays(5),
                'next_maintenance_date' => now()->addDays(85),
                'total_ride_hours' => 62,
                'total_distance' => 542.8,
                'is_active' => true,
            ],
            [
                'name' => 'Road Speed Demon',
                'model' => 'Émonda ALR 5',
                'brand' => 'Trek',
                'description' => 'Ultra-lightweight road bike designed for speed and performance. Perfect for road racing and long-distance cycling.',
                'color' => 'Racing Red',
                'size' => 'M',
                'type' => 'road',
                'hourly_rate' => 85000,
                'daily_rate' => 520000,
                'weekly_rate' => 3200000,
                'monthly_rate' => 12000000,
                'features' => [
                    'Carbon Fork',
                    'Shimano 105',
                    'Lightweight Aluminum',
                    'Drop Handlebars',
                    'Racing Geometry'
                ],
                'images' => [
                    'https://example.com/bikes/trek-emonda-1.jpg',
                    'https://example.com/bikes/trek-emonda-2.jpg'
                ],
                'status' => 'rented',
                'condition' => 'excellent',
                'location' => 'Ba Dinh District',
                'qr_code' => 'BIKE_004',
                'last_maintenance_date' => now()->subDays(22),
                'next_maintenance_date' => now()->addDays(68),
                'total_ride_hours' => 78,
                'total_distance' => 890.3,
                'is_active' => true,
            ],
            [
                'name' => 'Adventure Touring',
                'model' => 'Checkpoint ALR 5',
                'brand' => 'Trek',
                'description' => 'Versatile gravel bike perfect for both on-road and off-road adventures. Built for comfort and durability.',
                'color' => 'Olive Green',
                'size' => 'L',
                'type' => 'gravel',
                'hourly_rate' => 70000,
                'daily_rate' => 420000,
                'weekly_rate' => 2600000,
                'monthly_rate' => 9800000,
                'features' => [
                    'Gravel Tires',
                    'Disc Brakes',
                    'Multiple Mounting Points',
                    'Stable Geometry',
                    'All-weather Ready'
                ],
                'images' => [
                    'https://example.com/bikes/trek-checkpoint-1.jpg',
                    'https://example.com/bikes/trek-checkpoint-2.jpg'
                ],
                'status' => 'available',
                'condition' => 'good',
                'location' => 'Hoan Kiem Station',
                'qr_code' => 'BIKE_005',
                'last_maintenance_date' => now()->subDays(35),
                'next_maintenance_date' => now()->addDays(55),
                'total_ride_hours' => 124,
                'total_distance' => 1205.7,
                'is_active' => true,
            ],
            [
                'name' => 'Urban Commuter',
                'model' => 'FX 3 Disc',
                'brand' => 'Trek',
                'description' => 'Reliable commuter bike with practical features for daily city riding. Comfortable and efficient.',
                'color' => 'Charcoal Grey',
                'size' => 'M',
                'type' => 'hybrid',
                'hourly_rate' => 45000,
                'daily_rate' => 280000,
                'weekly_rate' => 1800000,
                'monthly_rate' => 6500000,
                'features' => [
                    'Disc Brakes',
                    'Internal Cable Routing',
                    'Rack and Fender Ready',
                    'Reflective Details',
                    'Comfortable Grips'
                ],
                'images' => [
                    'https://example.com/bikes/trek-fx3-1.jpg'
                ],
                'status' => 'maintenance',
                'condition' => 'good',
                'location' => 'Service Center',
                'qr_code' => 'BIKE_006',
                'last_maintenance_date' => now()->subDays(2),
                'next_maintenance_date' => now()->addDays(88),
                'total_ride_hours' => 89,
                'total_distance' => 623.4,
                'is_active' => true,
            ],
            [
                'name' => 'Kids Mountain Bike',
                'model' => 'Precaliber 24',
                'brand' => 'Trek',
                'description' => 'Safe and fun mountain bike designed specifically for young riders. Perfect for building confidence.',
                'color' => 'Bright Orange',
                'size' => 'S',
                'type' => 'kids',
                'hourly_rate' => 25000,
                'daily_rate' => 150000,
                'weekly_rate' => 950000,
                'monthly_rate' => 3500000,
                'features' => [
                    'Lightweight Frame',
                    'Easy Shifting',
                    'Training Wheels Ready',
                    'Safety Reflectors',
                    'Adjustable Seat'
                ],
                'images' => [
                    'https://example.com/bikes/trek-precaliber-1.jpg',
                    'https://example.com/bikes/trek-precaliber-2.jpg'
                ],
                'status' => 'available',
                'condition' => 'excellent',
                'location' => 'Family Park Station',
                'qr_code' => 'BIKE_007',
                'last_maintenance_date' => now()->subDays(12),
                'next_maintenance_date' => now()->addDays(78),
                'total_ride_hours' => 15,
                'total_distance' => 85.2,
                'is_active' => true,
            ],
            [
                'name' => 'Premium Electric',
                'model' => 'Super Commuter+ 8S',
                'brand' => 'Trek',
                'description' => 'Top-of-the-line electric commuter bike with premium features and exceptional performance.',
                'color' => 'Midnight Black',
                'size' => 'L',
                'type' => 'electric',
                'hourly_rate' => 150000,
                'daily_rate' => 950000,
                'weekly_rate' => 6000000,
                'monthly_rate' => 22000000,
                'features' => [
                    '500Wh Battery',
                    'Bosch Performance Motor',
                    'Integrated Lights',
                    'Belt Drive',
                    'Internal Hub Gears',
                    'Smart Phone Integration'
                ],
                'images' => [
                    'https://example.com/bikes/trek-supercommuter-1.jpg',
                    'https://example.com/bikes/trek-supercommuter-2.jpg',
                    'https://example.com/bikes/trek-supercommuter-3.jpg'
                ],
                'status' => 'available',
                'condition' => 'excellent',
                'battery_level' => 92,
                'location' => 'Premium Station',
                'qr_code' => 'BIKE_008',
                'last_maintenance_date' => now()->subDays(7),
                'next_maintenance_date' => now()->addDays(83),
                'total_ride_hours' => 34,
                'total_distance' => 298.6,
                'is_active' => true,
            ],
            [
                'name' => 'Classic Cruiser',
                'model' => 'Electra Townie',
                'brand' => 'Electra',
                'description' => 'Comfortable cruiser bike perfect for leisurely rides around the city. Classic style meets modern comfort.',
                'color' => 'Cream White',
                'size' => 'M',
                'type' => 'cruiser',
                'hourly_rate' => 40000,
                'daily_rate' => 250000,
                'weekly_rate' => 1600000,
                'monthly_rate' => 5800000,
                'features' => [
                    'Upright Riding Position',
                    'Wide Comfort Seat',
                    'Swept-back Handlebars',
                    'Coaster Brake',
                    'Chain Guard'
                ],
                'images' => [
                    'https://example.com/bikes/electra-townie-1.jpg',
                    'https://example.com/bikes/electra-townie-2.jpg'
                ],
                'status' => 'available',
                'condition' => 'good',
                'location' => 'West Lake Station',
                'qr_code' => 'BIKE_009',
                'last_maintenance_date' => now()->subDays(25),
                'next_maintenance_date' => now()->addDays(65),
                'total_ride_hours' => 67,
                'total_distance' => 423.8,
                'is_active' => true,
            ],
            [
                'name' => 'BMX Freestyle',
                'model' => 'Haro Downtown',
                'brand' => 'Haro',
                'description' => 'Durable BMX bike designed for tricks and freestyle riding. Built to handle jumps and stunts.',
                'color' => 'Electric Blue',
                'size' => 'S',
                'type' => 'bmx',
                'hourly_rate' => 35000,
                'daily_rate' => 200000,
                'weekly_rate' => 1300000,
                'monthly_rate' => 4800000,
                'features' => [
                    'Steel Frame',
                    'Single Speed',
                    'Freestyle Geometry',
                    'Strong Wheels',
                    'Stunt Pegs'
                ],
                'images' => [
                    'https://example.com/bikes/haro-bmx-1.jpg'
                ],
                'status' => 'out_of_service',
                'condition' => 'fair',
                'location' => 'Repair Shop',
                'qr_code' => 'BIKE_010',
                'last_maintenance_date' => now()->subDays(45),
                'next_maintenance_date' => now()->subDays(5), // Overdue
                'total_ride_hours' => 156,
                'total_distance' => 245.9,
                'is_active' => false,
            ],
        ];

        foreach ($bikes as $bikeData) {
            RentalBike::create($bikeData);
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
