<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galerisfoto')->insert([
            'judulfoto' => '',
            'deskripsifoto' => '',
            'tanggalunggah' => '',
            'lokasifile' => '',
            'masukkanfoto' => '',
            
        ]);
    }
}
