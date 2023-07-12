<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function show(Request $request) {
        $permanaHomeNumberId = $request->only('permana_home_number_id');

        if(empty($permanaHomeNumberId)){
            $notifikasi = Notifikasi::where('user_id', auth()->user()->id)
                                    ->get();
        } else {
            $notifikasi = Notifikasi::where('user_id', auth()->user()->id)
                                    ->orWhere('permana_home_number_id', $permanaHomeNumberId)
                                    ->get();
        }

        return response()->json($notifikasi);
    }
}
