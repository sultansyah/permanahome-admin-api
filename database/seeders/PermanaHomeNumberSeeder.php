<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermanaHomeNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permana_home_numbers')->insert([
            [
                'full_name' => 'Sultan',
                'email' => 'sultan@gmail.com',
                'no_hp' => '0129218321',
                'no_wa' => '2193289819',
                'tanda_tangan' => 'sultan.png',
                'ktp' => 'sultan.png',
                'negara' => 'Indonesia',
                'provinsi' => 'Kepulauan Riau',
                'kota' => 'Batam',
                'alamat_instalasi' => 'Jalan Pergi Kesana kemari mencari makan',
                'kode_pos' => '12921',
                'paket_layanan_id' => 1,
                'admin_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'full_name' => 'maksal',
                'email' => 'maksal@gmail.com',
                'no_hp' => '0129218321',
                'no_wa' => '2193289819',
                'tanda_tangan' => 'sultan.png',
                'ktp' => 'sultan.png',
                'negara' => 'Indonesia',
                'provinsi' => 'Kepulauan Riau',
                'kota' => 'Batam',
                'alamat_instalasi' => 'Jalan Pergi Kesana kemari mencari makan',
                'kode_pos' => '12921',
                'paket_layanan_id' => 3,
                'admin_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
