<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index(){
        $relations = ['user:id,full_name', 'permana_home_number:id,full_name'];
        $notifikasi = Notifikasi::with($relations)
                ->orderBy('created_at', 'desc')
                ->get();

        return view('notifikasi', ['notifikasi' => $notifikasi]);
    }
}
