<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermanaHomeNumber extends Model
{
    use HasFactory;

    protected $table = 'permana_home_numbers';

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
        'paket_layanan_id',
        'admin_id',
    ];

    public function paket_layanan() {
        return $this->hasOne(PaketLayanan::class, 'id', 'paket_layanan_id');
    }

    public function admin() {
        return $this->hasOne(Admin::class, 'id', 'admin_id');
    }
}
