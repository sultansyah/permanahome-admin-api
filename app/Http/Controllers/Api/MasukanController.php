<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masukan;
use Illuminate\Support\Facades\Validator;

class MasukanController extends Controller
{
    public function getByUserId(Request $request){
        $masukan = Masukan::with('user')
                        ->select(['id', 'deskripsi', 'created_at', 'user_id'])
                        ->where('user_id', auth()->user()->id)
                        ->get();

        return response()->json($masukan);
    }

    public function store(Request $request) {
        $data = $request->only('deskripsi');
        $validator = Validator::make($data, [
            'deskripsi' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->messages(),
            ], 400);
        }

        try {
            Masukan::create([
                'deskripsi' => $request->deskripsi,
                'user_id' => auth()->user()->id,
            ]);
            
            return response()->json([
                'message' => 'Masukan anda berhasil dikirim',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 400);
        }
    }
}
