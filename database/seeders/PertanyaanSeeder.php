<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pertanyaans')->insert([
            [
                'judul' => 'Kenapa kecepatan internet saya lambat?',
                'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam phasellus vestibulum lorem sed risus. Diam maecenas ultricies mi eget. Nam at lectus urna duis convallis. Malesuada proin libero nunc consequat. Auctor neque vitae tempus quam pellentesque nec nam aliquam sem. Ut lectus arcu bibendum at. Vitae proin sagittis nisl rhoncus mattis rhoncus urna. Vitae congue mauris rhoncus aenean vel elit scelerisque. Ultricies lacus sed turpis tincidunt id aliquet.
                Nullam ac tortor vitae purus faucibus ornare. Lorem ipsum dolor sit amet consectetur. Consectetur adipiscing elit ut aliquam purus sit amet. Purus ut faucibus pulvinar elementum integer. Nulla at volutpat diam ut venenatis tellus in metus. Id leo in vitae turpis massa sed elementum tempus. Nam aliquam sem et tortor consequat id porta. Enim blandit volutpat maecenas volutpat blandit. Neque vitae tempus quam pellentesque nec nam aliquam sem et. Magna etiam tempor orci eu lobortis elementum.
                Adipiscing bibendum est ultricies integer quis auctor elit sed vulputate. Mattis molestie a iaculis at erat. Diam sollicitudin tempor id eu nisl nunc mi ipsum. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Pellentesque massa placerat duis ultricies lacus sed. Odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Nulla malesuada pellentesque elit eget gravida cum sociis. Lectus vestibulum mattis ullamcorper velit sed ullamcorper. Ut diam quam nulla porttitor massa id. Magna etiam tempor orci eu. At elementum eu facilisis sed odio morbi. Neque vitae tempus quam pellentesque. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt.',
                'admin_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'konten' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam phasellus vestibulum lorem sed risus. Diam maecenas ultricies mi eget. Nam at lectus urna duis convallis. Malesuada proin libero nunc consequat. Auctor neque vitae tempus quam pellentesque nec nam aliquam sem. Ut lectus arcu bibendum at. Vitae proin sagittis nisl rhoncus mattis rhoncus urna. Vitae congue mauris rhoncus aenean vel elit scelerisque. Ultricies lacus sed turpis tincidunt id aliquet.
                Nullam ac tortor vitae purus faucibus ornare. Lorem ipsum dolor sit amet consectetur. Consectetur adipiscing elit ut aliquam purus sit amet. Purus ut faucibus pulvinar elementum integer. Nulla at volutpat diam ut venenatis tellus in metus. Id leo in vitae turpis massa sed elementum tempus. Nam aliquam sem et tortor consequat id porta. Enim blandit volutpat maecenas volutpat blandit. Neque vitae tempus quam pellentesque nec nam aliquam sem et. Magna etiam tempor orci eu lobortis elementum.
                Adipiscing bibendum est ultricies integer quis auctor elit sed vulputate. Mattis molestie a iaculis at erat. Diam sollicitudin tempor id eu nisl nunc mi ipsum. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Pellentesque massa placerat duis ultricies lacus sed. Odio ut enim blandit volutpat maecenas volutpat blandit aliquam. Nulla malesuada pellentesque elit eget gravida cum sociis. Lectus vestibulum mattis ullamcorper velit sed ullamcorper. Ut diam quam nulla porttitor massa id. Magna etiam tempor orci eu. At elementum eu facilisis sed odio morbi. Neque vitae tempus quam pellentesque. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt.',
                'admin_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
