<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaketLayanan;
use Illuminate\Http\Request;

class PaketLayananController extends Controller
{
    public function index() {
        $paketLayanan =  PaketLayanan::all();

        return view('paketLayanan', [ 'paketLayanan' => $paketLayanan ]);
    }
}
