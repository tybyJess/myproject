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
Route::resource('/Login','App\Http\Controllers\LoginController');
Route::resource('/Home','App\Http\Controllers\HomeController');
Route::resource('/Greet','App\Http\Controllers\WelcomeController');
Route::resource('/remove','App\Http\Controllers\RemoveController');
