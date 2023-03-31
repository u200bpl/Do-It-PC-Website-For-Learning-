<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gamingpc;

class GamingpcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gamingpc::create([
            'name' => "Game PC A46G",
            'description' => "De betaalbare Game PC voor iedere gamer!",
            'image' => "game-pc-budget.png",
            'case_id' => 1,
            'motherboard_id' => 1,
            'processor_id' => 1,
            'ram_id' => 1,
            'graphicscard_id' => 1,
            'ssd_id' => 1,
            'hdd_id' => 1,
            'cooler_id' => 1,
            'powersuply_id' => 1,
            'price' => "599,00",
            'stock' => '1',
        ]);

        Gamingpc::create([
            'name' => "Game PC A56 RT36",
            'description' => "De betaalbare Game PC voor iedere gamer!",
            'image' => "game-pc-normal.png",
            'case_id' => 2,
            'motherboard_id' => 2,
            'processor_id' => 2,
            'ram_id' => 2,
            'graphicscard_id' => 2,
            'ssd_id' => 2,
            'hdd_id' => 2,
            'cooler_id' => 2,
            'powersuply_id' => 2,
            'price' => "1299,00",
            'stock' => '0',
        ]);

        Gamingpc::create([
            'name' => "Game PC A76X RT37",
            'description' => "De betaalbare Game PC voor iedere gamer!",
            'image' => "game-pc-pro.png",
            'case_id' => 3,
            'motherboard_id' => 3,
            'processor_id' => 3,
            'ram_id' => 3,
            'graphicscard_id' => 3,
            'ssd_id' => 3,
            'hdd_id' => 3,
            'cooler_id' => 3,
            'powersuply_id' => 3,
            'price' => "1999,00",
            'stock' => '80',
        ]);

        Gamingpc::create([
            'name' => "Game PC I136K RT38",
            'description' => "De betaalbare Game PC voor iedere gamer!",
            'image' => "game-pc-max.png",
            'case_id' => 4,
            'motherboard_id' => 4,
            'processor_id' => 4,
            'ram_id' => 4,
            'graphicscard_id' => 4,
            'ssd_id' => 4,
            'hdd_id' => 4,
            'cooler_id' => 4,
            'powersuply_id' => 4,
            'price' => "2499,00",
            'stock' => '69',
        ]);

        Gamingpc::create([
            'name' => "Game PC I137K RT48",
            'description' => "De betaalbare Game PC voor iedere gamer!",
            'image' => "game-pc-ultimate.png",
            'case_id' => 5,
            'motherboard_id' => 5,
            'processor_id' => 5,
            'ram_id' => 5,
            'graphicscard_id' => 5,
            'ssd_id' => 5,
            'hdd_id' => 5,
            'cooler_id' => 5,
            'powersuply_id' => 5,
            'price' => "3499,00",
            'stock' => '420',
        ]);
    }
}
