<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Login extends Controller
{
    function index()
    {
        return view('login');
    }

    function varify(Request $req)
    {
        $user = User::where('username', $req->username)
            ->where('password', $req->password)
            ->first();

        if($user)
        {
            $req->session()->put('username', $req->username);
            return redirect('/home');
        }
        else
        {
            return view('login')->with('alert', 'Username or Password in incorrect!');
        }
    }
}
