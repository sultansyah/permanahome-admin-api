<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masukan;

class MasukanController extends Controller
{
    public function index(Request $request){
        $limit = $request->query('limit') ? $request->query('limit') : 5;

        $user = auth()->user();

        $masukan = Masukan::with('user:full_name')
                    ->select(['id', 'deskripsi', 'created_at'])
                    ->where('user_id', $user->id)
                    ->paginate($limit);

        return response()->json($masukan);
    }
}
