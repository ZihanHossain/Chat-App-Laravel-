<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    function index()
    {
        return view('index');
    }
    function setRecever(Request $req, $send_to)
    {
        $req->session()->put('send_to', $send_to);

        return redirect('/index');
    }
}
