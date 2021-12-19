<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
public function show($name = null){

//    return DB::select("SELECT * FROM users");
    return User::all();
}

public function submit_form(Request $req){

    return $req->input();
}

public function table(){

    $data =   Http::get("https://reqres.in/api/users?page=1");
    return view('data',['data' => $data]);
}


    public function api_call()
    {
      Http::get("https://reqres.in/api/users?page=1");
    }

    public function upload(Request $req){
//    return $req->file('file')->store('img');

        $file_name = $req->file('file')->getClientOriginalName();

        return $req->file('file')->storeAs('img',time().$file_name);
}

function employees_data(){

    return DB::table('employees')
        ->join('company','company.id','=','employees.company_id','right')
        ->select('employees.*','company.name AS company')
        ->get();
}

function index(){
    $user= User::where('email', $request->email)->first();
    // print_r($data);
    if (!$user || !Hash::check($request->password, $user->password)) {
        return response([
                            'message' => ['These credentials do not match our records.']
                        ], 404);
    }

    $token = $user->createToken('my-app-token')->plainTextToken;

    $response = [
        'user' => $user,
        'token' => $token
    ];

    return response($response, 201);
}



}
