<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserPermanaHomeNumber;
use Illuminate\Http\Request;

class UserPermanaHomeNumberController extends Controller
{
    public function show() {
        $userPermanaHomeNumber = UserPermanaHomeNumber::where('user_id', auth()->user()->id)->get();

        return response()->json($userPermanaHomeNumber);
    }
}
