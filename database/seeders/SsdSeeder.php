<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ssd;

class SsdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ssd::create([
            'name' => "SSD 1",
            'price' => 99,
        ]);

        Ssd::create([
            'name' => "SSD 2",
            'price' => 50,
        ]);

        Ssd::create([
            'name' => "SSD 3",
            'price' => 125,
        ]);

        Ssd::create([
            'name' => "SSD 4",
            'price' => 200,
        ]);

        Ssd::create([
            'name' => "SSD 5",
            'price' => 135,
        ]);
    }
}
