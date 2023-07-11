<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
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
