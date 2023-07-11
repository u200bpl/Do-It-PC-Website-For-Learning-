<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Powersuply;

class PowersuplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Powersuply::create([
            'name' => "650W",
            'price' => 99,
        ]);

        Powersuply::create([
            'name' => "650W Gold",
            'price' => 50,
        ]);

        Powersuply::create([
            'name' => "650W Gold",
            'price' => 125,
        ]);

        Powersuply::create([
            'name' => "850W Gold",
            'price' => 200,
        ]);

        Powersuply::create([
            'name' => "1000W Gold",
            'price' => 135,
        ]);

        Powersuply::create([
            'name' => " Corsair RM850x 850W",
            'price' => 179,
        ]);
    }
}
