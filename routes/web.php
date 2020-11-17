<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {

    $user = Auth::user();
    
    return view('auth.login');


});


Route::post('login','Auth\LoginController@login')->name('login');


Route::get('/home', 'HomeController@index');
Route::get('/getUsersAll', 'HomeController@getUsersAll');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
