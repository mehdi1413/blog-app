<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/', 'front.index')->name('home');

Route::view('/login','front.auth.login')->name('login');
Route::view('/register','front.auth.register')->name('register');

Route::post('/register',[AuthController::class, 'register']);

Route::group(['prefix'=>'/panel/'] , function (){
    Route::get('', function () {
        return view('panel.index');
    });
});
