<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $users = \App\Models\User::all();
    return view('welcome',compact('users'));
});

Route::post('/login-as', function () {
    $user = Auth::loginUsingId($_POST['user_id']);
    return view('user_page',compact('user'));
});
