<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produksi=[
            ['kebun_id'=> '1', 'jumlah_tandan'=> 100, 'berat_total'=> 1500, 'tanggal_panen' => '17-10-2024'],
            ['kebun_id'=> '1', 'jumlah_tandan'=> 100, 'berat_total'=> 1500, 'tanggal_panen' => '17-10-2024'],
            ['kebun_id'=> '1', 'jumlah_tandan'=> 100, 'berat_total'=> 1500, 'tanggal_panen' => '17-10-2024'],
            ['kebun_id'=> '1', 'jumlah_tandan'=> 100, 'berat_total'=> 1500, 'tanggal_panen' => '17-10-2024'],
            ['kebun_id'=> '1', 'jumlah_tandan'=> 100, 'berat_total'=> 1500, 'tanggal_panen' => '17-10-2024'],
        ];
    }
}
