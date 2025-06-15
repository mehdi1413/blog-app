<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});

Route::group(['prefix'=>'/panel/'] , function (){
    Route::get('', function () {
        return view('panel.index');
    });
});
