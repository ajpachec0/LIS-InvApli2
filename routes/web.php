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

// Route::resource('libro', 'LibrosControllerApi');

Route::group(['prefix' => 'libro'], function () {

    Route::get('/', 'LibrosControllerApi@index'); //ya
    Route::post('/store', 'LibrosControllerApi@store'); //ya
    Route::get('/show/{libro}', 'LibrosControllerApi@showlibro');//ya
    Route::get('/delete/{libro}', 'LibrosControllerApi@deletelibro');//ya

    
});