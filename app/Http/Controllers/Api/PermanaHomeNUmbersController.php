<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PermanaHomeNumber;
use Illuminate\Http\Request;

class PermanaHomeNumbersController extends Controller
{
    public function getById($id){
        try {
            if(empty($id)) {
                return response()->json([
                    'errors' => 'Need ID',
                ], 400);
            }

            $permanaHomeNumber = PermanaHomeNumber::find($id);

            return response()->json($permanaHomeNumber);
        } catch (\Throwable $th) {
            return response()->json([
                'messages' => $th->getMessage(),
            ], 400);
        }
    }
}
