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
            'name' => "AMD Wraith Stealth Cooler",
            'price' => 99,
        ]);

        Cooler::create([
            'name' => "Endorfy Fera 5 ARGB",
            'price' => 50,
        ]);

        Cooler::create([
            'name' => "Endorfy Fera 5 ARGB",
            'price' => 125,
        ]);

        Cooler::create([
            'name' => "Corsair iCUE H100i Elite Capellix",
            'price' => 200,
        ]);

        Cooler::create([
            'name' => "Corsair iCUE H150i RGB Elite",
            'price' => 135,
        ]);

        Cooler::create([
            'name' => "Corsair iCUE H100i ELITE LCD XT",
            'price' => 249,
        ]);
    }
}
