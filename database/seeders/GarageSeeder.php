<?php

namespace Database\Seeders;

use App\Models\Garage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GarageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $garages = [
            [
                'namer' => 'AutoFix Garage',
                'location' => '123 Main St, Cityville',
                'longitude' => -122.4194,
                'latitude' => 37.7749,
                'contact_number' => '555-1234',
                'email' => 'contact@autofixgarage.com',
            ]
        ];
        foreach ($garages as $garageData) {
            Garage::create($garageData);
        }
    }
}
