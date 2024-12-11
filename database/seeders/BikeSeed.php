<?php

namespace Database\Seeders;

use App\Models\BikeModel;
use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BikeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brand = Brand::where('slug', 'ktm')->first();
        $bikeModel = new BikeModel();
        $bikeModel->fill([
            'name' => 'Duke 390 2016',
            'year' => 2016,
            'brand_id' => $brand->id,
        ]);
        $bikeModel->save();
    }
}
