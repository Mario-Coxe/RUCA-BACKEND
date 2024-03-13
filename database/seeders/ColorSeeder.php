<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colors;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $colors = [
            ['name' => 'Preto', 'value' => '#000000'],
            ['name' => 'Branco', 'value' => '#FFFFFF'],
            ['name' => 'Prata', 'value' => '#C0C0C0'],
            ['name' => 'Cinza', 'value' => '#808080'],
            ['name' => 'Azul', 'value' => '#0000FF'],
            ['name' => 'Vermelho', 'value' => '#FF0000'],
            ['name' => 'Verde', 'value' => '#008000'],
            ['name' => 'Amarelo', 'value' => '#FFFF00'],
            ['name' => 'Laranja', 'value' => '#FFA500'],
            ['name' => 'Marrom', 'value' => '#964B00'],
            ['name' => 'Roxo', 'value' => '#800080'],
            ['name' => 'Bege', 'value' => '#F5F5DC'],
            ['name' => 'Dourado', 'value' => '#FFD700'],
            ['name' => 'Bronze', 'value' => '#CD7F32'],
            ['name' => 'Creme', 'value' => '#FFFDD0'],
            ['name' => 'Turquesa', 'value' => '#40E0D0'],
            ['name' => 'Bordô', 'value' => '#800000'],
            ['name' => 'Pérola', 'value' => '#F0EAD6'],
            ['name' => 'Champagne', 'value' => '#F7E7CE'],
            ['name' => 'Grafite', 'value' => '#2F4F4F'],
            ['name' => 'Metálico', 'value' => '#D3D3D3'],
            ['name' => 'Ciano', 'value' => '#00FFFF'],
            ['name' => 'Magenta', 'value' => '#FF00FF'],
            ['name' => 'Índigo', 'value' => '#4B0082'],
            ['name' => 'Coral', 'value' => '#FF7F50']
        ];

        foreach ($colors as $color) {
            Colors::create([
                'name' => $color['name'],
                'value' => $color['value']
            ]);
        }
    }
}
