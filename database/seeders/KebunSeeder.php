<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KebunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kebun=[
            ['lokasi'=>'dusun baru','luas'=>'1','status'=>'aktif','tanggal_tanam'=>'2024-01-07','tanggal_panen'=>'2024-01-07'],
            ['lokasi'=>'dusun baru','luas'=>'1','status'=>'aktif','tanggal_tanam'=>'2024-01-07','tanggal_panen'=>'2024-01-07'],
            ['lokasi'=>'dusun harapan','luas'=>'2','status'=>'aktif','tanggal_tanam'=>'2024-01-07','tanggal_panen'=>'2024-01-07'],
            ['lokasi'=>'dusun bersama','luas'=>'1','status'=>'aktif','tanggal_tanam'=>'2024-01-07','tanggal_panen'=>'2024-01-07'],
            ['lokasi'=>'dusun baru','luas'=>'1','status'=>'aktif','tanggal_tanam'=>'2024-01-07','tanggal_panen'=>'2024-01-07'],
        ];

        DB::table('kebun')->insert($kebun);
    }
}
