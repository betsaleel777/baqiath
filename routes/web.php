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

Route::prefix('manage')->group( function() {
  Route::get('/contacts','BackController@contact')->name('contacts') ;
  Route::get('/contacts/{id}','BackController@contactShow')->name('contacts_show') ;
  Route::get('/contacts/delete/{id}','BackController@deleteContact')->name('contacts_delete') ;
  Route::get('/maisons','BackController@maison')->name('maisons') ;
}) ;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
