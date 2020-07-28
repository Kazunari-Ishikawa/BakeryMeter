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
    return view('index');
});

Route::get('/bakery', 'BakeryController@index')->name('bakery.index');

Route::get('bakery_request', 'BakeryController@bakery_request');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
