<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';

    protected $fillable = [
        'judul',
        'konten',
        'gambar',
        'admin_id',
    ];

    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}
