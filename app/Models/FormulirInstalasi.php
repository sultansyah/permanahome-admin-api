<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirInstalasi extends Model
{
    use HasFactory;

    protected $table = 'formulir_instalasis';

    protected $fillable = [
        'full_name',
        'email',
        'no_hp',
        'no_wa',
        'tanda_tangan',
        'ktp',
        'negara',
        'provinsi',
        'kota',
        'alamat_instalasi',
        'kode_pos',
        'is_accept',
        'user_id',
        'paket_layanan_id',
    ];
}
