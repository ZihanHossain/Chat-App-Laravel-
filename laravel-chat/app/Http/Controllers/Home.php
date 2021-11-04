<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Home extends Controller
{
    function index()
    {
        $users = User::all();

        return view('home')->with('users', $users);
    }
}
