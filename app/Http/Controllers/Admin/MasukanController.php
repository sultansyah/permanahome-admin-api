<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masukan;
use Illuminate\Http\Request;

class MasukanController extends Controller
{
    public function index(){
        $masukan = Masukan::with('user:id,full_name')
                ->orderBy('created_at', 'desc')
                ->get();

        return view('masukan', ['masukan' => $masukan]);
    }
}
