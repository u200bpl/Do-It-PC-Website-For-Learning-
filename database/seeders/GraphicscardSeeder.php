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
            'name' => "Graphicscard 1",
            'price' => 99,
        ]);

        Graphicscard::create([
            'name' => "Graphicscard 2",
            'price' => 50,
        ]);

        Graphicscard::create([
            'name' => "Graphicscard 3",
            'price' => 125,
        ]);

        Graphicscard::create([
            'name' => "Graphicscard 4",
            'price' => 200,
        ]);

        Graphicscard::create([
            'name' => "Graphicscard 5",
            'price' => 135,
        ]);
    }
}
