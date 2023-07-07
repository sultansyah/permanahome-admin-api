<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request) {
        $data = $request->all();

        $validator = Validator::make($data, [
            'full_name' => 'required|string',
            'email' => 'required|email',
            'username' => 'required|string|min:6',
            'password' => 'required|string|min:6',
            'profile_picture' => 'mimes:jpeg,png,jpg',
            'no_hp' => 'required',
            'no_wa' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                [
                    'errors' => $validator->messages(),
                ],
                400
            );
        }

        $user = User::where('email', $request->email)->exists();
        if($user) {
            return response()->json(
                [
                    'messages' => 'Email already taken',
                ],
                409
            );
        }

        $user = User::where('username', $request->username)->exists();
        if($user) {
            return response()->json(
                [
                    'messages' => 'Username already taken',
                ],
                409
            );
        }
    }
}
