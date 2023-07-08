<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';

    protected $fillable = [
        'jenis',
        'divisi',
        'status',
        'prioritas',
        'deskripsi',
        'tanggal_diselesaikan',
        'tindakan',
        'user_id',
        'permana_home_number_id',
    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function permana_home_number() {
        return $this->hasOne(PermanaHomeNumber::class, 'id', 'permana_home_number_id');
    }
}
