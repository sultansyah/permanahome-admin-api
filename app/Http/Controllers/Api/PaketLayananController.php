<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaketLayanan;

class PaketLayananController extends Controller
{
    public function index(Request $request) {
        $paketLayanan = PaketLayanan::all();
        return response()->json($paketLayanan);
    }

    public function getPaketLayananByArea($area) {
        try {
            $paketLayanan = PaketLayanan::where('area', 'LIKE', "%$area%")->get();

            return response()->json($paketLayanan);
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'message' => $th->getMessage(),
                ],
                500
            );
        }
    }

    // public function store(Request $request) {
    //     $validator = Validator::make($request->all(), [
    //         'area' => 'required|string',
    //         'nama' => 'required|string',
    //         'deskripsi' => 'required|string',
    //         'biaya' => 'required|string',
    //     ]);

    //     if($validator->fails()) {
    //         return response()->json(
    //             [
    //                 'errors' => $validator->messages(),
    //             ],
    //             400
    //         );
    //     }
    // }
}
