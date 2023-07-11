<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masukan;

class MasukanController extends Controller
{
    public function getByUserId(Request $request){
        $limit = $request->query('limit') ? $request->query('limit') : 5;

        $user = auth()->user();

        $masukan = Masukan::with('user')
                        ->select(['id', 'deskripsi', 'created_at', 'user_id'])
                        ->where('user_id', $user->id)
                        ->get();

        return response()->json($masukan);
    }
}
