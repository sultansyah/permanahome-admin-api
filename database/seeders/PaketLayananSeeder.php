<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paket_layanans')->insert([
            [
                'area' => 'Medan dan Binjai',
                'nama' => 'LITE',
                'deskripsi' => 'Up to 25 Mbps Download, Up to 10 Mbps Upload, Kontrak, Minimal 12 Bulan, Private IP Address, Unlimited Data, SLA : Best Effort, Tanpa FUP',
                'biaya' => '299.000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'area' => 'Medan dan Binjai',
                'nama' => 'SMART',
                'deskripsi' => 'Up to 50 Mbps Download, Up to 20 Mbps Upload, Kontrak Minimal 12 Bulan, Private IP Address, Unlimited Data, SLA : Best Effort, Tanpa FUP',
                'biaya' => '419.000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'area' => 'Medan dan Binjai',
                'nama' => 'HAPPY',
                'deskripsi' => 'Up to 100 Mbps Download, Up to 30 Mbps Upload, Kontrak Minimal 12 Bulan, Private IP Address, Unlimited Data, SLA : Best Effort, Tanpa FUP',
                'biaya' => '549.000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
