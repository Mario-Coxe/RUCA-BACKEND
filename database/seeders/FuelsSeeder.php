<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fuel;

class FuelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fuels = [
            "Bio-Diesel",
            "Diesel",
            "E85",
            "Eléctrico",
            "Gás natural",
            "Gasolina",
            "GPL",
            "Híbrido",
            "Outro"
        ];

        foreach ($fuels as $fuel) {
            Fuel::create([
                'name' => $fuel
            ]);
        }
    }
}
