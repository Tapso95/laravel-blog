<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('test', function(){
    return view('test.index');
});
Route::get('profile/{fistname}/{lastname}', function($firstname = null, $lastname = null){
    //return view('profile.index')->with('firstname', $firstname)->with('lastname', $lastname);
    return view('profile.index')->with(compact('firstname','lastname'));
});