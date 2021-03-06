<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{

    public $successStatus = 200;


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'email'         => 'required|email',
            'password'      => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }


        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            ])){
                $user = Auth::user();
                $success['token'] =  $user->createToken('MyApp')->accessToken;
                $success['data'] = $user;
                return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Terjadi Kesalahan'], 401);
        }
    }



}
