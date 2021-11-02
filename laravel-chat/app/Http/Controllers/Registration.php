<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class Registration extends Controller
{
    function index()
    {
        return view('registration');
    }

    function register(Request $req)
    {    
        $user = new User();

        $userexist = User::where('username', $req->username)->first();

        if($userexist)
        {

        }
        else
        {
            $user->username = $req -> username;
            $user->password = $req -> password;
            $user->save();

            $req->session()->put('username', $req->username);

            return redirect('/index');
        }

        return view('registration')->with('alert', 'User Already exists!');
    }
}
