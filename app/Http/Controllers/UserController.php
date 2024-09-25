<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    //
    function login(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();
        return $user->password;
        if(!$user || Hash::check($request->password, $user->password) )
        {
            return "password is incorrect";
        }
        else{
            $request->session()->put('user', $user);
            return redirect('/');
        }

    }

    function register(Request $request)
    {
        $user = new User;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=Hash::make($request->username);
        $user->save();
        return redirect('/login');
        
    }
}
