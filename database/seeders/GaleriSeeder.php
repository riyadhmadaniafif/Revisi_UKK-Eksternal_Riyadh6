<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeris')->insert([
            'username' => '',
            'password' => '',
            'email' => '',
            'namalengkap' => '',
            'alamat' => '',
            'foto' => '',

        ]);
    }
}
