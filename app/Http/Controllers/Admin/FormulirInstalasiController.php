<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormulirInstalasi;
use Illuminate\Http\Request;

class FormulirInstalasiController extends Controller
{
    public function index() {
        $relations = [
            'paket_layanan:id,area,nama,deskripsi,biaya',
            'user:id,full_name',
        ];

        $formulirInstalasi = FormulirInstalasi::with($relations)
                                                ->orderBy('created_at', 'desc')
                                                ->get();

        return view('formulirInstalasi', [ 'formulirInstalasi' => $formulirInstalasi ]);
    }
}