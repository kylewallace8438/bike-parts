<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RentalBike;
use App\Models\MaintenanceHistory;

class MaintenanceHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Lấy các rental bikes để tạo maintenance history
        $rentalBikes = RentalBike::take(5)->get();

        if ($rentalBikes->isEmpty()) {
            $this->command->warn('No rental bikes found. Please seed rental bikes first.');
            return;
        }

        $maintenanceTypes = ['routine', 'repair', 'emergency', 'inspection', 'upgrade', 'recall'];
        $priorities = ['low', 'normal', 'high', 'urgent'];
        $statuses = ['scheduled', 'in_progress', 'completed', 'cancelled'];
        $technicians = [
            ['name' => 'Nguyen Van A', 'id' => 'TECH001'],
            ['name' => 'Tran Thi B', 'id' => 'TECH002'],
            ['name' => 'Le Van C', 'id' => 'TECH003'],
            ['name' => 'Pham Thi D', 'id' => 'TECH004'],
        ];
        $workshops = [
            'Hanoi Central Workshop',
            'Ho Chi Minh Workshop',
            'Da Nang Branch',
            'Can Tho Service Center',
        ];

        $partsData = [
            [
                ['part_name' => 'brake_pads', 'quantity' => 2, 'cost' => 50000],
                ['part_name' => 'chain', 'quantity' => 1, 'cost' => 150000],
            ],
            [
                ['part_name' => 'tire', 'quantity' => 2, 'cost' => 200000],
                ['part_name' => 'inner_tube', 'quantity' => 2, 'cost' => 40000],
            ],
            [
                ['part_name' => 'gear_cable', 'quantity' => 1, 'cost' => 30000],
                ['part_name' => 'brake_cable', 'quantity' => 1, 'cost' => 25000],
            ],
            [
                ['part_name' => 'pedal', 'quantity' => 2, 'cost' => 120000],
                ['part_name' => 'seat', 'quantity' => 1, 'cost' => 180000],
            ],
        ];

        $servicesData = [
            ['cleaning', 'lubrication', 'brake_adjustment'],
            ['gear_tuning', 'wheel_alignment', 'chain_replacement'],
            ['tire_replacement', 'tube_replacement', 'pressure_check'],
            ['full_inspection', 'safety_check', 'performance_tuning'],
        ];

        foreach ($rentalBikes as $bike) {
            // Tạo 3-5 maintenance records cho mỗi bike
            $numRecords = rand(3, 5);

            for ($i = 0; $i < $numRecords; $i++) {
                $technician = $technicians[array_rand($technicians)];
                $partsReplaced = $partsData[array_rand($partsData)];
                $servicesPerformed = $servicesData[array_rand($servicesData)];
                $partsCost = array_sum(array_column($partsReplaced, 'cost'));
                $laborCost = rand(100000, 300000);
                $maintenanceDate = now()->subDays(rand(30, 365));
                $status = $statuses[array_rand($statuses)];

                $completedDate = null;
                $nextMaintenanceDue = null;

                if ($status === 'completed') {
                    $completedDate = $maintenanceDate->copy()->addDays(rand(0, 3));
                    $nextMaintenanceDue = $completedDate->copy()->addDays(rand(60, 120));
                }

                MaintenanceHistory::create([
                    'bike_plate' => $bike->qr_code,
                    'bike_model' => $bike->model ?? 'Unknown Model',
                    'bike_brand' => $bike->brand ?? 'Unknown Brand',
                    'rental_bike_id' => $bike->id,
                    'maintenance_date' => $maintenanceDate,
                    'maintenance_type' => $maintenanceTypes[array_rand($maintenanceTypes)],
                    'priority' => $priorities[array_rand($priorities)],
                    'description' => $this->getMaintenanceDescription(),
                    'parts_replaced' => $partsReplaced,
                    'services_performed' => $servicesPerformed,
                    'labor_cost' => $laborCost,
                    'parts_cost' => $partsCost,
                    'total_cost' => $laborCost + $partsCost,
                    'technician_name' => $technician['name'],
                    'technician_id' => $technician['id'],
                    'workshop_location' => $workshops[array_rand($workshops)],
                    'mileage_at_maintenance' => rand(1000, 5000),
                    'hours_at_maintenance' => rand(100, 800),
                    'status' => $status,
                    'scheduled_date' => $maintenanceDate->copy()->subDays(rand(1, 7)),
                    'completed_date' => $completedDate,
                    'notes' => $this->getRandomNotes(),
                    'before_images' => $this->getRandomImages('before'),
                    'after_images' => $status === 'completed' ? $this->getRandomImages('after') : null,
                    'customer_complaint' => rand(0, 1) ? $this->getRandomComplaint() : null,
                    'technician_findings' => $this->getRandomFindings(),
                    'recommendations' => $this->getRandomRecommendations(),
                    'next_maintenance_due' => $nextMaintenanceDue,
                    'warranty_status' => rand(0, 1) ? 'under_warranty' : 'expired',
                    'warranty_months_remaining' => rand(0, 1) ? rand(1, 12) : 0,
                ]);
            }
        }

        $this->command->info('Maintenance history seeded successfully!');
    }

    private function getMaintenanceDescription(): string
    {
        $descriptions = [
            'Regular maintenance and safety inspection',
            'Repair of damaged brake system',
            'Emergency repair due to chain malfunction',
            'Scheduled preventive maintenance',
            'Upgrade of gear system for better performance',
            'Replacement of worn-out tires and tubes',
            'Full service including cleaning and lubrication',
            'Repair of punctured tire and tube replacement',
            'Adjustment of brake and gear cables',
            'Comprehensive safety and performance check',
        ];

        return $descriptions[array_rand($descriptions)];
    }

    private function getRandomNotes(): string
    {
        $notes = [
            'Bike in good condition after maintenance',
            'Customer reported smooth operation after repair',
            'All parts functioning properly',
            'Minor adjustments needed for optimal performance',
            'Recommended more frequent cleaning for longevity',
            'Excellent maintenance history, well-maintained bike',
            'Some wear on components, but within acceptable limits',
            'Customer satisfied with repair quality',
            'Preventive measures taken to avoid future issues',
            'All safety checks passed successfully',
        ];

        return $notes[array_rand($notes)];
    }

    private function getRandomImages(string $type): array
    {
        $imageCount = rand(1, 3);
        $images = [];

        for ($i = 0; $i < $imageCount; $i++) {
            $images[] = [
                'url' => "https://example.com/maintenance-images/{$type}/" . uniqid() . '.jpg',
                'description' => ucfirst($type) . ' maintenance image ' . ($i + 1),
                'timestamp' => now()->toISOString(),
            ];
        }

        return $images;
    }

    private function getRandomComplaint(): string
    {
        $complaints = [
            'Brake makes squeaking noise when applied',
            'Gear shifting is not smooth',
            'Chain keeps falling off during riding',
            'Tire pressure seems to drop quickly',
            'Pedals feel loose and wobbly',
            'Seat height adjustment is not working',
            'Handlebar feels loose',
            'Wheel makes grinding noise',
            'Bike pulls to one side while riding',
            'Bell is not working properly',
        ];

        return $complaints[array_rand($complaints)];
    }

    private function getRandomFindings(): string
    {
        $findings = [
            'Brake pads worn beyond acceptable limit',
            'Chain stretched and needs replacement',
            'Tire tread depth below safety threshold',
            'Gear cable tension incorrect',
            'Pedal bearings show signs of wear',
            'Seat post clamp needs tightening',
            'Handlebar stem bolts loose',
            'Wheel bearings need lubrication',
            'Wheel alignment slightly off',
            'Bell mechanism jammed with debris',
        ];

        return $findings[array_rand($findings)];
    }

    private function getRandomRecommendations(): string
    {
        $recommendations = [
            'Replace brake pads within next 30 days',
            'Schedule chain replacement in next maintenance',
            'Check tire pressure weekly',
            'Lubricate moving parts every 2 weeks',
            'Inspect brake cables monthly',
            'Clean and lubricate chain after every 10 rides',
            'Check wheel alignment if issues persist',
            'Replace worn components as needed',
            'Schedule next maintenance in 3 months',
            'Regular cleaning recommended for longevity',
        ];

        return $recommendations[array_rand($recommendations)];
    }
}
