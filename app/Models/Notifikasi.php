<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $table = 'notifikasi';

    protected $fillable = [
        'pesan',
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
