<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    function index(Request $req, $send_to)
    {
        $req->session()->put('send_to', $send_to);

        return view('index');
    }
}
