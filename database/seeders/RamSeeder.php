<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ram;

class RamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ram::create([
            'name' => "16GB DDR4",
            'price' => 99,
        ]);

        Ram::create([
            'name' => "16GB DDR4",
            'price' => 50,
        ]);

        Ram::create([
            'name' => "16GB DDR5",
            'price' => 125,
        ]);

        Ram::create([
            'name' => "16GB DDR4",
            'price' => 200,
        ]);

        Ram::create([
            'name' => "32GB DDR5",
            'price' => 135,
        ]);
    }
}
