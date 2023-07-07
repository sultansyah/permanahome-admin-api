<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show() {
        $user = getUser(auth()->user()->id);

        return response()->json($user);
    }

    public function getUserByUsername($username) {
        $user = User::where('username', $username)
                ->where('id', '<>', auth()->user()->id)
                ->get();
        
        $user->map(function($item){
            $item->profile_picture = $item->profile_picture ? url("storage/gambar/user/$item->profile_picture") : '';

            return $item;
        });

        return response()->json($user);
    }
}
