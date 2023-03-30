<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Performance;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Performance::create([
            'gamingpc_id' => 3,
            'game_id' => 1,
            'teneighty' => 850,
            'fortiethfortieth' => 650,
            'fourthousand' => 350,
        ]);

        Performance::create([
            'gamingpc_id' => 3,
            'game_id' => 2,
            'teneighty' => 1000,
            'fortiethfortieth' => 750,
            'fourthousand' => 425,
        ]);

        Performance::create([
            'gamingpc_id' => 3,
            'game_id' => 3,
            'teneighty' => 650,
            'fortiethfortieth' => 450,
            'fourthousand' => 250,
        ]);

        Performance::create([
            'gamingpc_id' => 3,
            'game_id' => 4,
            'teneighty' => 150,
            'fortiethfortieth' => 75,
            'fourthousand' => 25,
        ]);

        Performance::create([
            'gamingpc_id' => 3,
            'game_id' => 5,
            'teneighty' => 350,
            'fortiethfortieth' => 215,
            'fourthousand' => 85,
        ]);

        Performance::create([
            'gamingpc_id' => 3,
            'game_id' => 6,
            'teneighty' => 350,
            'fortiethfortieth' => 214,
            'fourthousand' => 76,
        ]);

        Performance::create([
            'gamingpc_id' => 3,
            'game_id' => 7,
            'teneighty' => 185,
            'fortiethfortieth' => 110,
            'fourthousand' => 73,
        ]);

        Performance::create([
            'gamingpc_id' => 3,
            'game_id' => 8,
            'teneighty' => 350,
            'fortiethfortieth' => 215,
            'fourthousand' => 85,
        ]);
    }
}