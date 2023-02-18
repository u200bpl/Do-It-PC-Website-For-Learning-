<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PcCase;

class CaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PcCase::create([
            'name' => "Case 1",
            'price' => 99,
        ]);

        PcCase::create([
            'name' => "Case 2",
            'price' => 50,
        ]);

        PcCase::create([
            'name' => "Case 3",
            'price' => 125,
        ]);

        PcCase::create([
            'name' => "Case 4",
            'price' => 200,
        ]);

        PcCase::create([
            'name' => "Case 5",
            'price' => 135,
        ]);
    }
}
