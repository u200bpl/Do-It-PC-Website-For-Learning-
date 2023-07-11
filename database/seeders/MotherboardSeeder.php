<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Motherboard;

class MotherboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motherboard::create([
            'name' => "IDK",
            'price' => 99,
        ]);

        Motherboard::create([
            'name' => "B550",
            'price' => 50,
        ]);

        Motherboard::create([
            'name' => "B650",
            'price' => 125,
        ]);

        Motherboard::create([
            'name' => "B760",
            'price' => 200,
        ]);

        Motherboard::create([
            'name' => "Z790",
            'price' => 135,
        ]);

        Motherboard::create([
            'name' => "Gigabyte B650I AORUS ULTRA",
            'price' => 450,
        ]);
    }
}
