<?php

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

Route::get('HDTutoMail', function () {

    $user = \App\User::find(1);

    Mail::to($user->email)->send(new \App\Mail\HDTutoMail($user));

    //dd("Email is Sent.");

    return redirect('/home');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
