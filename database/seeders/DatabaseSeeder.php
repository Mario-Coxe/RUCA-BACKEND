<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ColorSeeder;
use Database\Seeders\CarBrandSeeder;
use Database\Seeders\ModelsSeeder;
use Database\Seeders\FuelsSeeder;
use Database\Seeders\YearSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ColorSeeder::class, CarBrandSeeder::class, ModelsSeeder::class, FuelsSeeder::class, YearSeeder::class
        ]);
    }
}
