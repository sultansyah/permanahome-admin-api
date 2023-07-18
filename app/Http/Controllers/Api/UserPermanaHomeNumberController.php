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
        $userPermanaHomeNumber = UserPermanaHomeNumber::with('permana_home_number.paket_layanan')
                                                        ->where('user_id', auth()->user()->id)
                                                        ->get();

        return response()->json($userPermanaHomeNumber);
    }

    public function store(Request $request) {
        $data = $request->all();
        $validator = Validator::make($data, [
            'permana_home_number_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->messages(),
            ], 400);
        }

        try {
            $ifExist = UserPermanaHomeNumber::where([
                ['permana_home_number_id', '=', $request->permana_home_number_id],
                ['user_id', '=',auth()->user()->id]
            ])->exists();

            if($ifExist){
                return response()->json([
                    'message' => 'The data already exists',
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
                'message' => 'Berhasil',
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message' => $th->getMessage(),
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
                    'message' => $validator->messages(),
                ], 400);
            }

            $ifSameUser = UserPermanaHomeNumber::where([
                ['id', '=', $request->id],
            ])->first();
            if(empty($ifSameUser) or !($ifSameUser->user_id == auth()->user()->id)) {
                throw new Exception("Data doesn't exist");
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

    public function destroy($id) {
        try {
            if(empty($id)){
                return response()->json([
                    'message' => 'Need ID',
                ], 400);
            }

            DB::beginTransaction();
            $userPermanaHomeNumber = UserPermanaHomeNumber::find($id);
            if(!empty($userPermanaHomeNumber) and $userPermanaHomeNumber->user_id == auth()->user()->id){
                $userPermanaHomeNumber->delete();

                $temp = UserPermanaHomeNumber::where('user_id', '=', auth()->user()->id)->first();
                if(!empty($temp)) {
                    $temp->update(['is_active' => 1]);
                }
            } else {
                throw new Exception("Data doesn't exist");
            }

            DB::commit();

            return response()->json([
                'message' => 'Data Deleted'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message' => $th->getMessage(),
            ]);
        }
    }
}
