<?php

namespace App\Http\Controllers\Api\v1;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login(Request $request)
    {

        $validator=\Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);


        if ($validator->fails()){

            return response(['data'=>$validator->errors()->all(),'status'=>400],400);
        }

        elseif (!auth()->validate(['email'=>$request->input('email'),'password'=>$request->password])){

            return response(['data'=>'unauthenticate','status'=>401],401);

        }else{

            $user=User::whereEmail($request->input('email'))->first();

            $token=$user->createToken('zataee Api Token Android')->accessToken;

            return response(['data'=>$token,'status'=>200],200);

        }

    }


    public function AuthSubSystem(Request $request)
    {

       $user=$request->user();


//        dd($user);



        return $user;
    }
}
