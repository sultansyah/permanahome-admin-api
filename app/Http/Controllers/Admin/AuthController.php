<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('username', 'password');

        echo $request->username;
        echo $request->password;

        if(Auth::guard('web')->attempt($credentials)) {
            echo 1;
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('error', 'Invalid Credential')->withInput();
    }

    public function logout(){
        Auth::guard('web')->logout();

        return redirect()->route('admin.auth.index');
    }
}
