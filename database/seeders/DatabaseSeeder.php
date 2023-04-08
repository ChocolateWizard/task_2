<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use app\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            GenreSeeder::class,
            ProductionRoleSeeder::class,
            UserSeeder::class,
            MovieSeeder::class,
            PersonSeeder::class,
            PivotSeeder::class,
            ProductionInfoSeeder::class
        ]);
    }
}
