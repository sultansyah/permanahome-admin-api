<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function show(Request $request){
        try {
            $tagihan = Tagihan::where('user_id', auth()->user()->id)->get();

            return response()->json($tagihan);
        } catch (\Throwable $th) {
            return response()->json([
                'messages' => $th->getMessage(),
            ], 400);
        }
    }

    public function getLatestById($id){
        try {
            $tagihan = Tagihan::where('permana_home_number_id', $id)->latest()->first();

            return response()->json($tagihan);
        } catch (\Throwable $th) {
            return response()->json([
                'messages' => $th->getMessage(),
            ], 400);
        }
    }

    public function getById($id){
        try {
            if(empty($id)) {
                return response()->json([
                    'errors' => 'Need ID',
                ], 400);
            }

            $tagihan = Tagihan::find($id);

            return response()->json($tagihan);
        } catch (\Throwable $th) {
            return response()->json([
                'messages' => $th->getMessage(),
            ], 400);
        }
    }
}
