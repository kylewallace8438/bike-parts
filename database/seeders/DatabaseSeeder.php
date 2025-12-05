<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Seed rental bikes first, then maintenance history
        $this->call([
            BrandSeed::class,
            KTMBikeSeed::class,
            GarageSeeder::class,
            RentalBikeSeeder::class,
        ]);
    }
}
