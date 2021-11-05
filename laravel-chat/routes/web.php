<?php

use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/login', 'App\Http\Controllers\Login@index');
Route::post('/loginvarify', 'App\Http\Controllers\Login@varify');

Route::get('/logout', 'App\Http\Controllers\Logout@logout');

Route::get('/home', 'App\Http\Controllers\Home@index');

Route::get('/index', 'App\Http\Controllers\Index@index')->middleware('varifylogin');
Route::get('/index/{send_to}', 'App\Http\Controllers\Index@setRecever')->middleware('varifylogin');

Route::get('/registration', 'App\Http\Controllers\Registration@index');
Route::post('/register', 'App\Http\Controllers\Registration@register');

Route::post('/send-message', function(Request $request) {
    event(new Message(
        $request->session()->get('username'),
        $request->input('message'),
        $request->input('send_to')),
    );
    return ['success' => true];
});
