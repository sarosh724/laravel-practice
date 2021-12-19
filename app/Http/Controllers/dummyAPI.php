<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;

class dummyAPI extends Controller
{
    //
    public function index()
    {
        return ['name' => "sarosh"];
    }

    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(
                [
                    'message' => ['These credentials do not match our records.']
                ],
                404
            );
        }

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 200);
    }

    function validation(Request $req){

        $rules=["name" => "required | email | max:10 | unique:company,name"];
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
        else{
            return ['message' => "operation successful"];
        }
    }

}

