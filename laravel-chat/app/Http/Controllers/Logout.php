<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logout extends Controller
{
    function logout(Request $req)
    {
        $req->session()->flush();
        return redirect('/login');
    }
}
