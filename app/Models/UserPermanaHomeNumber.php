<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermanaHomeNumber extends Model
{
    use HasFactory;

    protected $table = 'user_permana_home_numbers';

    protected $fillable = [
        'is_active',
        'user_id',
        'permana_home_number_id',
    ];
}
