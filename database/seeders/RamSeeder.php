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
            'name' => "Ram 1",
            'price' => 99,
        ]);

        Ram::create([
            'name' => "Ram 2",
            'price' => 50,
        ]);

        Ram::create([
            'name' => "Ram 3",
            'price' => 125,
        ]);

        Ram::create([
            'name' => "Ram 4",
            'price' => 200,
        ]);

        Ram::create([
            'name' => "Ram 5",
            'price' => 135,
        ]);
    }
}
