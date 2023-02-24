<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CountrySeeder::class,
            UserSeeder::class,
            CaseSeeder::class,
            CoolerSeeder::class,
            ProcessorSeeder::class,
            GraphicscardSeeder::class,
            HddSeeder::class,
            MotherboardSeeder::class,
            PowersuplySeeder::class,
            RamSeeder::class,
            SsdSeeder::class,
            GamingpcSeeder::class,
        ]);
    }
}
