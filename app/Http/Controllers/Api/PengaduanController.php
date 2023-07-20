<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengaduanController extends Controller
{
    public function show() {
        $permintaan = Pengaduan::where('user_id', auth()->user()->id)->get();

        return response()->json($permintaan);
    }

    public function store(Request $request) {
        $data = $request->all();
        $validator = Validator::make($data, [
            'jenis' => 'required',
            'deskripsi' => 'required',
            'permana_home_number_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->messages(),
            ], 400);
        }

        try {
            Pengaduan::create([
                'jenis' => $request->jenis,
                'deskripsi' => $request->deskripsi,
                'user_id' => auth()->user()->id,
                'permana_home_number_id' => $request->permana_home_number_id,
            ]);
            
            return response()->json([
                'messages' => 'Permintaan anda berhasil dikirim',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 400);
        }
    }
}