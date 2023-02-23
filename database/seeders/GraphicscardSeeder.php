<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Graphicscard;

class GraphicscardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Graphicscard::create([
            'name' => "None",
            'price' => 0,
        ]);

        Graphicscard::create([
            'name' => "Nvidia GeForce RTX 3060",
            'price' => 50,
        ]);

        Graphicscard::create([
            'name' => "Nvidia GeForce RTX 3070",
            'price' => 125,
        ]);

        Graphicscard::create([
            'name' => "Nvidia GeForce RTX 3080",
            'price' => 200,
        ]);

        Graphicscard::create([
            'name' => "Nvidia GeForce RTX 4080",
            'price' => 135,
        ]);
    }
}
