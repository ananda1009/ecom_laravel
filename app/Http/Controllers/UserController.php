<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $res = User::where(['email'=>$request->email])->first();
        print_r($res);
    }
}
