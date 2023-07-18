<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tagihans')->insert([
            [
                'jumlah_tagihan' => '399.000',
                'tanggal_dibayar' => Carbon::now()->format('Y-m-d H:i:s'),
                'status_pembayaran' => 1,
                'user_id' => 2,
                'permana_home_number_id' => 2,
                'tanggal_awal_tagihan' => Carbon::now()->format('Y-m-d H:i:s'),
                'tanggal_akhir_tagihan' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'jumlah_tagihan' => '299.000',
                'tanggal_dibayar' => Carbon::now()->format('Y-m-d H:i:s'),
                'status_pembayaran' => 1,
                'user_id' => 1,
                'permana_home_number_id' => 1,
                'tanggal_awal_tagihan' => Carbon::now()->format('Y-m-d H:i:s'),
                'tanggal_akhir_tagihan' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
