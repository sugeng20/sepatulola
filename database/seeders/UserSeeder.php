<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            ['name' => 'Admin', 'username' => 'admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('123'), 'no_hp' => '083721345678', 'foto' => 'user-4.jpg', 'role' => 'ADMIN'],
            ['name' => 'Guru', 'username' => 'guru', 'email' => 'guru@gmail.com', 'password' => Hash::make('123'), 'no_hp' => '083721345678', 'foto' => 'user-4.jpg', 'role' => 'GURU'],
            ['name' => 'Orang Tua', 'username' => 'ortu', 'email' => 'ortu@gmail.com', 'password' => Hash::make('123'), 'no_hp' => '083721345678', 'foto' => 'user-4.jpg', 'role' => 'ORTU']
        ]);
    }
}
