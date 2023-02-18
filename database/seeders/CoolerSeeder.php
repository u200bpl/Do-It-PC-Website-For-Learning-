<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cooler;

class CoolerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cooler::create([
            'name' => "Cooler 1",
            'price' => 99,
        ]);

        Cooler::create([
            'name' => "Cooler 2",
            'price' => 50,
        ]);

        Cooler::create([
            'name' => "Cooler 3",
            'price' => 125,
        ]);

        Cooler::create([
            'name' => "Cooler 4",
            'price' => 200,
        ]);

        Cooler::create([
            'name' => "Cooler 5",
            'price' => 135,
        ]);
    }
}
