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
            'first_name' => 'Dennis',
            'last_name' => 'Overman',
            'email' => 'dennis.overman@home.nl',
            'phone' => '0612345678',
            'address' => 'Benthuizenstraat 27',
            'city' => 'Tilburg',
            'state' => 'Noord-Brabant',
            'zip' => '5043 AT',
            'country' => 'NL',
            'password' => \Hash::make('1234'),
            'is_admin' => true
        ]);

        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@doitpc.nl',
            'phone' => '0612345678',
            'address' => 'Kerkstraat 1',
            'city' => 'Arnhem',
            'state' => 'Gelderland',
            'zip' => '6811 AA',
            'country' => 'NL',
            'password' => \Hash::make('1234'),
            'is_admin' => true
        ]);

        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@doe.be',
            'phone' => '0612345678',
            'address' => 'Kerkstraat 69',
            'city' => 'Brussel',
            'state' => 'Brussel',
            'zip' => '6811 XA',
            'country' => 'BE',
            'password' => \Hash::make('1234'),
            'is_admin' => false
        ]);
    }
}
