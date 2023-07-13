<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $table = 'pertanyaans';

    protected $fillable = [
        'judul',
        'konten',
        'admin_id',
    ];

    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}
