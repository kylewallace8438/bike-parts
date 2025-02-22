<?php

namespace Database\Seeders;

use App\Models\BikeModel;
use App\Models\Brand;
use Illuminate\Database\Seeder;

class KTMBikeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brand = Brand::where('slug', 'ktm')->first();
        $models = [
            [
                'name' => 'Duke 200 2014',
                'year' => 2014,
            ],
            [
                'name' => 'Duke 200 2016',
                'year' => 2016,
            ],
            [
                'name' => 'Duke 200 2022',
                'year' => 2022,
            ],
            [
                'name' => 'Duke 250 2016',
                'year' => 2016,
            ],
            [
                'name' => 'Duke 390 2014',
                'year' => 2014,
            ],
            [
                'name' => 'Duke 390 2016',
                'year' => 2016,
            ],
            [
                'name' => 'Duke 390 2018',
                'year' => 2018,
            ],
            [
                'name' => 'Duke 390 2024',
                'year' => 2024,
            ],
            [
                'name' => 'RC 200 2016',
                'year' => 2016,
            ],
            [
                'name' => 'RC 250 2016',
                'year' => 2016,
            ],
            [
                'name' => 'RC 390 2016',
                'year' => 2016,
            ],
            [
                'name' => 'RC 390 2018',
                'year' => 2018,
            ],
            [
                'name' => 'RC 390 2022',
                'year' => 2022,
            ],
        ];
        foreach ($models as $model) {
            $bikeModel = new BikeModel;
            $bikeModel->fill([
                'name' => $model['name'],
                'year' => $model['year'],
                'brand_id' => $brand->id,
            ]);
            $bikeModel->save();
        }
    }
}
