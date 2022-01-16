<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Greg Garth',
            'email' => 'Greg@binus.com',
            'password' => bcrypt('babujoki'),
            'address' => 'Stasiun Gambir',
            'phone' => '081269698888',
            'role' => 'member'
        ]);

        DB::table('users')->insert([
            'name' => 'Mulia Darma',
            'email' => 'Mulia@binus.com',
            'password' => bcrypt('bengkeldarma'),
            'address' => 'Darma Autos',
            'phone' => '081200006969',
            'role' => 'member'
        ]);

        DB::table('users')->insert([
            'name' => 'Weh Sing Yuen',
            'email' => 'SingSing@binus.com',
            'password' => bcrypt('mangodota'),
            'address' => 'Netherlands',
            'phone' => '081244445555',
            'role' => 'admin'
        ]);
    }
}
