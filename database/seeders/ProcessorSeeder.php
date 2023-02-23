<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Processor;

class ProcessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Processor::create([
            'name' => "AMD Ryzen 5 4600G",
            'price' => 99,
        ]);

        Processor::create([
            'name' => "AMD Ryzen 5 5600",
            'price' => 50,
        ]);

        Processor::create([
            'name' => "AMD Ryzen 5 7600X",
            'price' => 125,
        ]);

        Processor::create([
            'name' => "Intel Core i5 13600K",
            'price' => 200,
        ]);

        Processor::create([
            'name' => "Intel Core i7 13700K",
            'price' => 135,
        ]);
    }
}
