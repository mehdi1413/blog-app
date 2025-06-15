<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});

Route::view('/login','front.auth.login')->name('login');
Route::view('/register','front.auth.register')->name('register');

Route::group(['prefix'=>'/panel/'] , function (){
    Route::get('', function () {
        return view('panel.index');
    });
});
