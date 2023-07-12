<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notifikasi')->insert([
            [
                'pesan' => 'Jadi ini adalah notifikasi ke user 2 dan permananumber 2',
                'user_id' => 2,
                'permana_home_number_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'pesan' => 'Jadi ini adalah notifikasi ke user 1 dan permananumber 1',
                'user_id' => 1,
                'permana_home_number_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'pesan' => 'Jadi ini adalah notifikasi ke user 1',
                'user_id' => 1,
                'permana_home_number_id' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'pesan' => 'Jadi ini adalah notifikasi ke permananumber 1',
                'user_id' => null,
                'permana_home_number_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
