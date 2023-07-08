<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PermanaHomeNumber;
use Illuminate\Http\Request;

class PermanaHomeNumberController extends Controller
{
    public function index() {
        $relations = [
            'paket_layanan:id,area,nama,deskripsi,biaya',
            'admin:id,name',
        ];

        $permanaHomberNumbers = PermanaHomeNumber::with($relations)
                                                ->orderBy('created_at', 'desc')
                                                ->get();

        return view('permanaHomeNumber', [ 'permanaHomberNumbers' => $permanaHomberNumbers ]);
    }
}
