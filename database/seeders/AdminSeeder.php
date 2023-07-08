<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'name' => 'sultan',
                'username' => 'admin',
                'password' => '$2a$12$/XEgeGiq1f8JBs1na54sb.OxJkArODRFF17LB50PbTjbgT3UHV0Qy',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'maksal',
                'username' => 'maksal',
                'password' => '$2a$12$p7sc7iKlu123HgVeyJ52yOn07zMzmcEsFBHRbDxDPdBlqkB0rqS.q',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
