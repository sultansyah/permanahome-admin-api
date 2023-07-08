<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index(){
        $relations = [
            'user:id,full_name,no_hp,no_wa',
            'permana_home_number:id,full_name,no_hp,no_wa,alamat_instalasi,paket_layanan_id',
            'permana_home_number.paket_layanan:id,area,nama'
        ];
    
        $tagihan = Tagihan::with($relations)
                                ->orderBy('created_at', 'desc')
                                ->get();
                                
        return view('tagihan', [ 'tagihan' => $tagihan ]);
    }
}
