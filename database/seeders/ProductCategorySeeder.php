<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
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
                    'en' => 'Accessories',
                    'vi' => 'Phụ kiện',
                ]
            ],
            [
                'slug' => 'gear',
                'translation' => [
                    'en' => 'Gear',
                    'vi' => 'Trang bị mặc',
                ]
            ],
            [
                'slug' => 'maintainance',
                'translation' => [
                    'en' => 'Maintenance',
                    'vi' => 'Bảo trì',
                ]
            ],
            [
                'slug' => 'operations',
                'translation' => [
                    'en' => 'Operations',
                    'vi' => 'Vận hành',
                ]
            ],
        ];

        foreach ($categories as $categoryData) {
            ProductCategory::updateOrCreate(
                ['slug' => $categoryData['slug']],
                ['translation' => $categoryData['translation']]
            );
        }
    }
}
