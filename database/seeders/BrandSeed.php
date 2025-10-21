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
        ];
        foreach ($brands as $brand) {
            Brand::updateOrCreate(['name' => $brand['name']], $brand);
        }
    }
}
