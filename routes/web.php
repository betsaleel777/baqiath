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
Route::get('/', 'FrontController@index')->name('acceuil') ;
Route::get('/mailus', 'FrontController@mailus')->name('mailus') ;
Route::post('/mailus/send', 'FrontController@send')->name('mailus_send') ;
Route::get('/{locale}', 'FrontController@languages')->name('languages');
