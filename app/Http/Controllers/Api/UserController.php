<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function update(Request $request) {
        try {
            $user = User::find(auth()->user()->id);
            
            $data = $request->only('full_name', 'email', 'username', 'password', 'profile_picture', 'no_wa', 'no_wa');

            if($request->username != $user->username) {
                $isExistUsername = User::where('username', $request->username)->exists();
                if($isExistUsername) {
                    return response(
                        ['message' => 'Username already taken'],
                        409
                    );
                }
            }

            if($request->email != $user->email) {
                $isExistEmail = User::where('email', $request->email)->exists();
                if($isExistEmail) {
                    return response(
                        ['message' => 'Email already taken'],
                        409
                    );
                }
            }

            if($request->no_hp != $user->no_hp) {
                $isExistNoHp = User::where('no_hp', $request->no_hp)->exists();
                if($isExistNoHp) {
                    return response(
                        ['message' => 'No Hp already taken'],
                        409
                    );
                }
            }

            if($request->no_wa != $user->no_wa) {
                $isExistNoWa = User::where('no_wa', $request->no_wa)->exists();
                if($isExistNoWa) {
                    return response(
                        ['message' => 'No Wa already taken'],
                        409
                    );
                }
            }

            if($request->password) {
                $data['password'] = bcrypt($request->password);
            }

            if($request->profile_picture) {
                $profilePicture = uploadBase64Image($request->profile_picture, 'gambar/user/');
                $data['profile_picture'] = $profilePicture;

                if($user->profile_picture) {
                    Storage::delete("public/gambar/user/$user->profile_picture");
                }
            }

            $user->update($data);

            return response()->json([
                'message' => 'User Updated'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 500);
        }
    }
}