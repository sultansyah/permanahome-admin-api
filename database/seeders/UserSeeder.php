<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'full_name' => 'Sultan',
                'email' => 'sultan@gmail.com',
                'username' => 'sultan',
                'password' => '$2a$12$VggXiUqniZx0kB/RT9qw0uGp9cly1n936sWq1HTdBLP6PM1GPvN4a',
                'profile_picture' => 'sultan.png',
                'no_hp' => '0129218321',
                'no_wa' => '2193289819',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'full_name' => 'maksal',
                'email' => 'maksal@gmail.com',
                'username' => 'maksal',
                'password' => '$2a$12$DB2/1biOuEtgGY1HbDoq0O2xSLBIdfgUHRwvQQ4gRuA/oGcTKx7LO',
                'profile_picture' => 'sultan.png',
                'no_hp' => '91218331',
                'no_wa' => '38288912',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
