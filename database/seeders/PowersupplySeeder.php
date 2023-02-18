<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Powersupply;

class PowersupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Powersupply::create([
            'name' => "Powersupply 1",
            'price' => 99,
        ]);

        Powersupply::create([
            'name' => "Powersupply 2",
            'price' => 50,
        ]);

        Powersupply::create([
            'name' => "Powersupply 3",
            'price' => 125,
        ]);

        Powersupply::create([
            'name' => "Powersupply 4",
            'price' => 200,
        ]);

        Powersupply::create([
            'name' => "Powersupply 5",
            'price' => 135,
        ]);
    }
}
