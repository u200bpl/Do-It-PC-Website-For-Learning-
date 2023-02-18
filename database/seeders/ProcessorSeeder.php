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
            'name' => "Processor 1",
            'price' => 99,
        ]);

        Processor::create([
            'name' => "Processor 2",
            'price' => 50,
        ]);

        Processor::create([
            'name' => "Processor 3",
            'price' => 125,
        ]);

        Processor::create([
            'name' => "Processor 4",
            'price' => 200,
        ]);

        Processor::create([
            'name' => "Processor 5",
            'price' => 135,
        ]);
    }
}
