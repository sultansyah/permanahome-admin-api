<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function index(Request $request) {
        $limit = $request->query('limit') ? $request->query('limit') : 5;

        $berita = Berita::select('id', 'judul', 'konten', 'gambar', 'created_at')->paginate($limit);

        $berita->getCollection()->transform(function ($item) {
            $item->gambar = $item->gambar ? url("storage/gambar/berita/$item->gambar") : '';
            return $item;
        });

        return response()->json($berita);
    }
}
