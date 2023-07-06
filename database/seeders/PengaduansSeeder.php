<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengaduansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengaduans')->insert([
            [
                'jenis' => 'lambat',
                'divisi' => 'IT',
                'status' => 'Dalam Pemeriksaan',
                'prioritas' => 'normal',
                'deskripsi' => 'Jadi seperti itulah kejadiannya',
                'user_id' => 1,
                'permana_home_number_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'jenis' => 'cepat',
                'divisi' => 'IT',
                'status' => 'Proses',
                'prioritas' => 'Tinggi',
                'deskripsi' => 'Jadi mungkin begitu saja',
                'user_id' => 2,
                'permana_home_number_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
