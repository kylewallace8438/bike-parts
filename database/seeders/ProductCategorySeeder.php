<?php

namespace Database\Seeders;

use App\Models\ProductCateogry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'slug' => 'accessories',
                'translation' => [
                    'en' => ['name' => 'Accessories'],
                    'vi' => ['name' => 'Phụ kiện'],
                ]
            ],
            [
                'slug' => 'gear',
                'translation' => [
                    'en' => ['name' => 'Gear'],
                    'vi' => ['name' => 'Trang bị mặc'],
                ]
            ],
            [
                'slug' => 'maintainance',
                'translation' => [
                    'en' => ['name' => 'Maintenance'],
                    'vi' => ['name' => 'Bảo trì'],
                ]
            ],
            [
                'slug' => 'operations',
                'translation' => [
                    'en' => ['name' => 'Operations'],
                    'vi' => ['name' => 'Vận hành'],
                ]
            ],
        ];

        foreach ($categories as $categoryData) {
            ProductCateogry::updateOrCreate(
                ['slug' => $categoryData['slug']],
                ['translation' => $categoryData['translation']]
            );
        }
    }
}
