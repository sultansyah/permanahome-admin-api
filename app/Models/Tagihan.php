<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';

    protected $fillable = [
        'jumlah_tagihan',
        'tanggal_dibayar',
        'status_pembayaran',
        'user_id',
        'permana_home_number_id',
    ];
}
