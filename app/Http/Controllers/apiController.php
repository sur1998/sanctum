<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class apiController extends Controller
{
    public function login(Request $request){
        $user=User::where('email',$request->email)->first();
        $token = $user->createToken('token')->plainTextToken;
        
        $response = [
            'user' => $user,
            'token' => $token
        ];
    
         return response($response);
    }
    public function index(){
        return User::all();
    }
}
