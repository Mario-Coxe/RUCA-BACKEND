<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brands;

class CarBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carBrands = [
            'Acura',
            'Alfa Romeo',
            'Aston Martin',
            'Audi',
            'Bentley',
            'BMW',
            'Buick',
            'Cadillac',
            'Chevrolet',
            'Chrysler',
            'Dodge',
            'Ferrari',
            'Fiat',
            'Ford',
            'Genesis',
            'GMC',
            'Honda',
            'Hyundai',
            'Infiniti',
            'Jaguar',
            'Jeep',
            'Kia',
            'Lamborghini',
            'Land Rover',
            'Lexus',
            'Lincoln',
            'Lotus',
            'Maserati',
            'Mazda',
            'McLaren',
            'Mercedes-Benz',
            'Mini',
            'Mitsubishi',
            'Nissan',
            'Polestar',
            'Porsche',
            'Ram',
            'Rivian',
            'Rolls-Royce',
            'Saab',
            'Subaru',
            'Tesla',
            'Toyota',
            'Volkswagen',
            'Volvo',
        ];

        foreach ($carBrands as $brand) {
            Brands::create([
                'name' => $brand
            ]);
        }
    }
}
