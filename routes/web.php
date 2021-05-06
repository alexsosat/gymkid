<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;





Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('index');
    });

    Route::get('/alumnos', 'StudentController@index')->name('students.index');
});


Auth::routes();
