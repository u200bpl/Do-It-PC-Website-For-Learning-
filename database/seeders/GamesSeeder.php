<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'name' => "valorant",
        ]);

        Game::create([
            'name' => "minecraft",
        ]);

        Game::create([
            'name' => "csgo",
        ]);

        Game::create([
            'name' => "warzone2",
        ]);

        Game::create([
            'name' => "rocketleague",
        ]);

        Game::create([
            'name' => "fortnite",
        ]);

        Game::create([
            'name' => "phasmophobia",
        ]);

        Game::create([
            'name' => "gta5",
        ]);
    }
}
