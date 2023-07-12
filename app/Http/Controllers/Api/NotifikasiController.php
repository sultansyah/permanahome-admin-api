<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function show($permana_home_number_id) {
        $notifikasi = Notifikasi::where('user_id', auth()->user()->id)
                                ->orWhere('permana_home_number_id', $permana_home_number_id)
                                ->get();

        return response()->json($notifikasi);
    }
}
