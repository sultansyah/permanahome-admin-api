<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function show($id = null) {
        try {
            $permanaHomeNumberId = $id;

            if($permanaHomeNumberId == null){
                $notifikasi = Notifikasi::where('user_id', auth()->user()->id)
                                        ->get();
            } else {
                $notifikasi = Notifikasi::where('user_id', auth()->user()->id)
                                        ->orWhere('permana_home_number_id', $permanaHomeNumberId)
                                        ->get();
            }

            return response()->json($notifikasi);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 400);
        }
    }
}
