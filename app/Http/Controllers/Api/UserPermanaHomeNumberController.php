<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserPermanaHomeNumber;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            ])->exists();

            if($ifExist){
                return response()->json([
                    'messages' => 'The data already exists',
                ], 409);
            }

            DB::beginTransaction();
    
            $userPermanaHomeNumber = UserPermanaHomeNumber::create([
                'permana_home_number_id' => $request->permana_home_number_id,
                'user_id' => auth()->user()->id,
            ]);

            $ifExist = UserPermanaHomeNumber::where([
                ['user_id', '=', auth()->user()->id],
                ['is_active', '=', 1],
            ])->exists();
            if(!$ifExist){
                $userPermanaHomeNumber->update(['is_active' => 1]);
            }

            DB::commit();
    
            return response()->json([
                'messages' => 'Berhasil',
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'messages' => $th->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request) {
        try {
            $data = $request->only('id');
            $validator = Validator::make($data, [
                'id' => 'required',
            ]);

            if($validator->fails()){
                return response()->json([
                    'errors' => $validator->messages(),
                ], 400);
            }

            $ifSameUser = UserPermanaHomeNumber::where([
                ['id', '=', $request->id],
            ])->first();
            if(empty($ifSameUser) or !($ifSameUser->user_id == auth()->user()->id)) {
                throw new Exception("Not the same user or data doesn't exist");
            }

            $ifExist = UserPermanaHomeNumber::where([
                ['user_id', '=', auth()->user()->id],
                ['is_active', '=', 1],
            ])->first();
                
            DB::beginTransaction();
            if(!empty($ifExist)){
                UserPermanaHomeNumber::where([
                    ['user_id', '=', auth()->user()->id],
                    ['is_active', '=', 1],
                ])->update(['is_active' => 0]);
            }

            UserPermanaHomeNumber::where([
                ['user_id', '=', auth()->user()->id],
                ['id', '=', $request->id]
            ])->update(['is_active' => 1]);

            DB::commit();

            return response()->json([
                'message' => 'Updated'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message' => $th->getMessage(),
            ]);
        }
    }
}
