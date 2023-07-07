<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\PaketLayanan;

class PaketLayananController extends Controller
{
    public function index(Request $request) {
        $paketLayanan = PaketLayanan::all();
        return response()->json($paketLayanan);
    }

    public function getPaketLayananByArea($area) {
        $paketLayanan = PaketLayanan::where('area', 'LIKE', "%$area%")->get();

        return response()->json($paketLayanan);
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