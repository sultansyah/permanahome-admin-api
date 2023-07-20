<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormulirInstalasi;
use App\Models\Notifikasi;
use App\Models\PaketLayanan;
use App\Models\PermanaHomeNumber;
use App\Models\Tagihan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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

    public function terima($id) {
        try {
            DB::beginTransaction();

            $formulirInstalasi = FormulirInstalasi::find($id);
            $formulirInstalasi->is_accept = 1;
            $formulirInstalasi->save();

            $permanaHomeNumber = PermanaHomeNumber::create([
                'full_name' => $formulirInstalasi->full_name,
                'email' => $formulirInstalasi->email,
                'no_hp' => $formulirInstalasi->no_hp,
                'no_wa' => $formulirInstalasi->no_wa,
                'tanda_tangan' => $formulirInstalasi->tanda_tangan,
                'ktp' => $formulirInstalasi->ktp,
                'negara' => $formulirInstalasi->negara,
                'provinsi' => $formulirInstalasi->provinsi,
                'kota' => $formulirInstalasi->kota,
                'alamat_instalasi' => $formulirInstalasi->alamat_instalasi,
                'kode_pos' => $formulirInstalasi->kode_pos,
                'paket_layanan_id' => $formulirInstalasi->paket_layanan_id,
                'admin_id' => auth()->user()->id,
            ]);

            Notifikasi::create([
                'pesan' => "Selamat, Instalasi anda berhasil. Ini Permana Home Number anda: $permanaHomeNumber->id",
                'user_id' => $formulirInstalasi->user_id,
                'permana_home_number_id' => $permanaHomeNumber->id,
            ]);

            Tagihan::create([
                'jumlah_tagihan' => PaketLayanan::find($permanaHomeNumber->paket_layanan_id)->biaya,
                'permana_home_number_id' => $permanaHomeNumber->id,
                'tanggal_awal_tagihan' => Carbon::now()->format('Y-m-d H:i:s'),
                'tanggal_akhir_tagihan' => Carbon::now()->addDays(30)->format('Y-m-d H:i:s'),
            ]);

            
            $relations = [
                'paket_layanan:id,area,nama,deskripsi,biaya',
                'user:id,full_name',
            ];
            
            $formulirInstalasi = FormulirInstalasi::with($relations)
            ->orderBy('created_at', 'desc')
            ->get();

            DB::commit();

            return view('formulirInstalasi', [ 'formulirInstalasi' => $formulirInstalasi ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            echo $th->getMessage();
        }
    }
}