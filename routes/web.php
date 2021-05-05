<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {

    $user = Auth::user();
    
    return view('auth.login');


});


Route::post('login','Auth\LoginController@login')->name('login');
Route::post('register','Auth\registerController@create')->name('register');




Route::get('/home', 'HomeController@index');
Route::get('/getUsersAll', 'HomeController@getUsersAll');
Route::get('/getLocalesAll', 'HomeController@getLocalesAll');
Route::get('/getBalance', 'HomeController@getBalance');

Route::get('/getLocalesUser', 'HomeController@getLocalesUser');
Route::get('/getRegistros', 'HomeController@getRegistros');


/* Route::post('/saveRegister', function(){
    return "hola Sacowea";
});
 */
Route::post('/saveRegister', 'HomeController@saveRegister');


//vistas Admin
Route::get('/MisLocales', 'viewController@locales');
Route::get('/about', 'viewController@about');
Route::get('/users', 'viewController@users');
Route::get('/bandejas', 'viewController@bandejas');
Route::get('/registerU', 'viewController@registerU');
Route::get('/balance', 'viewController@balance');
Route::get('/registrarL', 'viewController@registrarL');



//user
Route::get('/register', 'viewController@register');
Route::get('/registros', 'viewController@registros');
Route::get('/misLocales', 'viewController@misLocales');
Route::get('/aboutUser', 'viewController@abouUser');


//pdf
Route::get('/pdfAll', 'HomeController@pdfAll');
Route::get('/excelAll', 'HomeController@excelAll')->name('Excel');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
