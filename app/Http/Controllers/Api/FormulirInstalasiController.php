<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FormulirInstalasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormulirInstalasiController extends Controller
{
    public function store(Request $request) {
        $data = $request->all();
        $validator = Validator::make($data, [
            'full_name' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'no_wa' => 'required',
            'tanda_tangan' => 'required',
            'ktp' => 'required',
            'negara' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'alamat_instalasi' => 'required',
            'kode_pos' => 'required',
            'paket_layanan_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->messages(),
            ], 400);
        }

        try {
            if($request->tanda_tangan) {
                $tanda_tangan = uploadBase64Image($request->tanda_tangan, 'gambar/tanda-tangan/');

                if($request->ktp) {
                    $ktp = uploadBase64Image($request->ktp, 'gambar/ktp/');
                } else {
                    return response()->json([
                        'message' => 'KTP data does not exist',
                    ], 400);
                }
            } else {
                return response()->json([
                    'message' => 'No signature data',
                ], 400);
            }

            FormulirInstalasi::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'no_wa' => $request->no_wa,
                'tanda_tangan' => $tanda_tangan,
                'ktp' => $ktp,
                'negara' => $request->negara,
                'provinsi' => $request->provinsi,
                'kota' => $request->kota,
                'alamat_instalasi' => $request->alamat_instalasi,
                'kode_pos' => $request->kode_pos,
                'user_id' => auth()->user()->id,
                'paket_layanan_id' => $request->paket_layanan_id,
            ]);
            
            return response()->json([
                'message' => 'Formulir instalasi berhasil dikirim',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 400);
        }
    }
}
