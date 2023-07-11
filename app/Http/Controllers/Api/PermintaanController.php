<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PermintaanController extends Controller
{
    public function store(Request $request) {
        $data = $request->all();
        $validator = Validator::make($data, [
            'jenis' => 'required',
            'deskripsi' => 'required',
            'permana_home_number_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->messages(),
            ], 400);
        }

        try {
            Permintaan::create([
                'jenis' => $request->jenis,
                'deskripsi' => $request->jenis,
                'user_id' => auth()->user()->id,
                'permana_home_number_id' => $request->permana_home_number_id,
            ]);

            return response()->json([
                'messages' => 'Permintaan anda berhasil dikirim',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'messages' => $th->getMessage(),
            ], 400);
        }
    }
}
