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
            'name' => "500GB NVMe",
            'price' => 99,
        ]);

        Ssd::create([
            'name' => "1TB NVMe",
            'price' => 50,
        ]);

        Ssd::create([
            'name' => "1TB NVMe",
            'price' => 125,
        ]);

        Ssd::create([
            'name' => "1TB NVMe",
            'price' => 200,
        ]);

        Ssd::create([
            'name' => "2TB NVMe",
            'price' => 135,
        ]);

        Ssd::create([
            'name' => "Samsung 990 Pro 2TB",
            'price' => 179,
        ]);
    }
}
