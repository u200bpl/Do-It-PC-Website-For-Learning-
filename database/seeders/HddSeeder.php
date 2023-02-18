<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hdd;

class HddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hdd::create([
            'name' => "Hdd 1",
            'price' => 99,
        ]);

        Hdd::create([
            'name' => "Hdd 2",
            'price' => 50,
        ]);

        Hdd::create([
            'name' => "Hdd 3",
            'price' => 125,
        ]);

        Hdd::create([
            'name' => "Hdd 4",
            'price' => 200,
        ]);

        Hdd::create([
            'name' => "Hdd 5",
            'price' => 135,
        ]);
    }
}
