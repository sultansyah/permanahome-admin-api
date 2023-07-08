<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserPermanaHomeNumber;
use Illuminate\Http\Request;

class UserPermanaHomeNumberController extends Controller
{
    public function index(){
        $relations = [
            'user:id',
            'permana_home_number:id',
        ];
    
        $userPermanaHomeNumber = UserPermanaHomeNumber::with($relations)
                                ->orderBy('created_at', 'desc')
                                ->get();
                                
        return view('userPermanaHomeNumber', [ 'userPermanaHomeNumber' => $userPermanaHomeNumber ]);
    }
}
