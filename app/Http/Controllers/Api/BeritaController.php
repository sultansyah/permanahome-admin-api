<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function index(Request $request) {
        try {
            $limit = $request->query('limit') ? $request->query('limit') : 5;

            $berita = Berita::select('id', 'judul', 'konten', 'gambar', 'created_at')->paginate($limit);

            $berita->getCollection()->transform(function ($item) {
                $item->gambar = $item->gambar ? url("storage/$item->gambar") : '';
                return $item;
            });

            return response()->json($berita);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
