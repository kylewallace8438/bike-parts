<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'KTM'],
            ['name' => 'Honda'],
            ['name' => 'Yamaha'],
            ['name' => 'Suzuki'],
            ['name' => 'Ducati'],
            ['name' => 'BMW'],
            ['name' => 'Harley-Davidson'],
            ['name' => 'Triumph'],
            ['name' => 'Kawasaki'],
            ['name' => 'Aprilia'],
        ];
        foreach ($brands as $brand) {
            Brand::updateOrCreate(['name' => $brand['name']], $brand);
        }
    }
}
