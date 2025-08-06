<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Seeder::call([
            LocationsSeeder::class,
            CategorySeeder::class
        ]);
    }
}