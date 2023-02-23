<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dennis',
            'email' => 'dennis.overman@home.nl',
            'country' => 'NL',
            'password' => \Hash::make('1234'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin.doitpc.nl',
            'country' => 'NL',
            'password' => \Hash::make('1234'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'john',
            'email' => 'john@doe.be',
            'country' => 'BE',
            'password' => \Hash::make('1234'),
            'is_admin' => false
        ]);
    }
}
