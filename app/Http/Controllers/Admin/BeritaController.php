<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $berita = Berita::with('admin:id,name')
                    ->orderBy('created_at', 'desc')
                    ->get();
        
        return view('berita', [ 'berita' => $berita ]);
    }
}
