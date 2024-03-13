<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models;
use App\Models\Brands;

class ModelsSeeder extends Seeder
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

        foreach ($carBrands as $brandName) {
            $brand = Brands::where('name', $brandName)->first();

            switch ($brandName) {
                case 'Acura':
                    $this->createModels($brand, ['MDX', 'RDX', 'TLX', 'ILX']);
                    break;
                case 'Alfa Romeo':
                    $this->createModels($brand, ['Giulia', 'Stelvio']);
                    break;
                case 'Aston Martin':
                    $this->createModels($brand, ['DB11', 'DBS', 'Vantage']);
                    break;
                case 'Audi':
                    $this->createModels($brand, ['A3', 'A4', 'A5', 'A6', 'Q3', 'Q5', 'Q7']);
                    break;
                case 'Bentley':
                    $this->createModels($brand, ['Continental GT', 'Bentayga', 'Flying Spur']);
                    break;
                case 'BMW':
                    $this->createModels($brand, ['3 Series', '5 Series', 'X3', 'X5', 'X7']);
                    break;
                case 'Buick':
                    $this->createModels($brand, ['Enclave', 'Encore', 'Envision']);
                    break;
                case 'Cadillac':
                    $this->createModels($brand, ['Escalade', 'CT4', 'CT5', 'XT4', 'XT5']);
                    break;
                case 'Chevrolet':
                    $this->createModels($brand, ['Camaro', 'Corvette', 'Equinox', 'Silverado', 'Tahoe']);
                    break;
                case 'Chrysler':
                    $this->createModels($brand, ['300', 'Pacifica', 'Voyager']);
                    break;
                case 'Dodge':
                    $this->createModels($brand, ['Challenger', 'Charger', 'Durango', 'Journey']);
                    break;
                case 'Ferrari':
                    $this->createModels($brand, ['488', 'F8 Tributo', 'Portofino', 'SF90 Stradale']);
                    break;
                case 'Fiat':
                    $this->createModels($brand, ['500', '500X', '500L']);
                    break;
                case 'Ford':
                    $this->createModels($brand, ['Escape', 'Explorer', 'F-150', 'Mustang']);
                    break;
                case 'Genesis':
                    $this->createModels($brand, ['G70', 'G80', 'G90']);
                    break;
                case 'GMC':
                    $this->createModels($brand, ['Acadia', 'Sierra', 'Yukon']);
                    break;
                case 'Honda':
                    $this->createModels($brand, ['Accord', 'Civic', 'CR-V', 'Pilot']);
                    break;
                case 'Hyundai':
                    $this->createModels($brand, ['Elantra', 'Santa Fe', 'Sonata', 'Tucson']);
                    break;
                case 'Infiniti':
                    $this->createModels($brand, ['Q50', 'Q60', 'QX50', 'QX60']);
                    break;
                case 'Jaguar':
                    $this->createModels($brand, ['F-PACE', 'XE', 'XF', 'XJ']);
                    break;
                case 'Jeep':
                    $this->createModels($brand, ['Cherokee', 'Grand Cherokee', 'Wrangler']);
                    break;
                case 'Kia':
                    $this->createModels($brand, ['Forte', 'Optima', 'Sorento', 'Sportage']);
                    break;
                case 'Lamborghini':
                    $this->createModels($brand, ['Aventador', 'Huracan', 'Urus']);
                    break;
                case 'Land Rover':
                    $this->createModels($brand, ['Discovery', 'Range Rover', 'Defender']);
                    break;
                case 'Lexus':
                    $this->createModels($brand, ['ES', 'GS', 'RX', 'NX', 'IS']);
                    break;
                case 'Lincoln':
                    $this->createModels($brand, ['Aviator', 'Continental', 'Corsair', 'Navigator']);
                    break;
                case 'Lotus':
                    $this->createModels($brand, ['Evora', 'Exige']);
                    break;
                case 'Maserati':
                    $this->createModels($brand, ['Ghibli', 'Levante', 'Quattroporte']);
                    break;
                case 'Mazda':
                    $this->createModels($brand, ['CX-5', 'CX-9', 'Mazda3', 'Mazda6']);
                    break;
                case 'McLaren':
                    $this->createModels($brand, ['570S', '720S', 'GT']);
                    break;
                case 'Mercedes-Benz':
                    $this->createModels($brand, ['C-Class', 'E-Class', 'GLC', 'GLE', 'S-Class']);
                    break;
                case 'Mini':
                    $this->createModels($brand, ['Cooper', 'Countryman', 'Clubman']);
                    break;
                case 'Mitsubishi':
                    $this->createModels($brand, ['Outlander', 'Mirage', 'Eclipse Cross']);
                    break;
                case 'Nissan':
                    $this->createModels($brand, ['Altima', 'Maxima', 'Rogue', 'Pathfinder', 'Titan']);
                    break;
                case 'Polestar':
                    $this->createModels($brand, ['Polestar 1', 'Polestar 2']);
                    break;
                case 'Porsche':
                    $this->createModels($brand, ['911', 'Cayenne', 'Panamera', 'Macan', 'Taycan']);
                    break;
                case 'Ram':
                    $this->createModels($brand, ['1500', '2500', '3500']);
                    break;
                case 'Rivian':
                    $this->createModels($brand, ['R1T', 'R1S']);
                    break;
                case 'Rolls-Royce':
                    $this->createModels($brand, ['Phantom', 'Ghost', 'Cullinan']);
                    break;
                case 'Saab':
                    $this->createModels($brand, ['9-3', '9-5']);
                    break;
                case 'Subaru':
                    $this->createModels($brand, ['Forester', 'Outback', 'Impreza', 'Crosstrek']);
                    break;
                case 'Tesla':
                    $this->createModels($brand, ['Model S', 'Model 3', 'Model X', 'Model Y']);
                    break;
                case 'Toyota':
                    $this->createModels($brand, ['Camry', 'Corolla', 'Highlander', 'RAV4', 'Tacoma']);
                    break;
                case 'Volkswagen':
                    $this->createModels($brand, ['Golf', 'Jetta', 'Passat', 'Tiguan']);
                    break;
                case 'Volvo':
                    $this->createModels($brand, ['S60', 'S90', 'XC40', 'XC60', 'XC90']);
                    break;
            }
        }
    }

    /**
     * Cria modelos de carro para uma marca específica.
     *
     * @param \App\Models\CarBrand $brand
     * @param array $models
     * @return void
     */
    private function createModels(Brands $brand, array $models)
    {
        foreach ($models as $modelName) {
            Models::create([
                'name' => $modelName,
                'brand_id' => $brand->id
            ]);
        }
    }
}
