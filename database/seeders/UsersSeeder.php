<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'PakGuru',
            'role' => 'admin',
            'email' => 'admin@sma404.com',
            'password' => bcrypt('password123')
        ]);

        DB::table('users')->insert([
            'name' => 'Fathonah Zuchriyah',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'afa@sma404.com',
            'password' => bcrypt('password123')
        ]);

        DB::table('users')->insert([
            'name' => 'Syaqia Fikriatul Ulfa',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'ulfa@sma404.com',
            'password' => bcrypt('password123')
        ]);
    }
}
