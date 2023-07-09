<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserPermanaHomeNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserPermanaHomeNumberController extends Controller
{
    public function show() {
        $userPermanaHomeNumber = UserPermanaHomeNumber::where('user_id', auth()->user()->id)->get();

        return response()->json($userPermanaHomeNumber);
    }

    public function store(Request $request) {
        $data = $request->all();
        $validator = Validator::make($data, [
            'permana_home_number_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->messages(),
            ], 400);
        }

        try {
            $ifExist = UserPermanaHomeNumber::where([
                ['permana_home_number_id', '=', $request->permana_home_number_id],
                ['user_id', '=',auth()->user()->id]
            ])->get();
    
            if($ifExist){
                return response()->json([
                    'messages' => 'The data already exists',
                ],409);
            }
    
            UserPermanaHomeNumber::create([
                'permana_home_number_id' => $request->permana_home_number_id,
                'user_id' => auth()->user()->id,
            ]);
    
            return response()->json([
                'messages' => 'Berhasil',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'messages' => $th->getMessage(),
            ], 500);
        }
    }
}
