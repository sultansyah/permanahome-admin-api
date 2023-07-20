<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Permintaan;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function show() {
        $pengaduan = Pengaduan::where('user_id', auth()->user()->id)->get();
        $permintaan = Permintaan::where('user_id', auth()->user()->id)->get();

        $data = array_merge(
            json_decode($pengaduan, true),
            json_decode($permintaan, true)
        );
        
        return response()->json($data);
    }
}