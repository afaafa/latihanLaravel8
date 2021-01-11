<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Fathonah Zuchriyah',
            'nis' => 101,
            'tgl_lahir' => '1995-03-04'
        ]);

        DB::table('siswa')->insert([
            'nama' => 'Syaqia Fikriatul Ulfa',
            'nis' => 102,
            'tgl_lahir' => '1996-03-03'
        ]);
         
    }
}
