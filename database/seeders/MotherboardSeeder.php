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
            'name' => "Motherboard 1",
            'price' => 99,
        ]);

        Motherboard::create([
            'name' => "Motherboard 2",
            'price' => 50,
        ]);

        Motherboard::create([
            'name' => "Motherboard 3",
            'price' => 125,
        ]);

        Motherboard::create([
            'name' => "Motherboard 4",
            'price' => 200,
        ]);

        Motherboard::create([
            'name' => "Motherboard 5",
            'price' => 135,
        ]);
    }
}
