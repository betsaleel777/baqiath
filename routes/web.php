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
Auth::routes(['reset' => false, 'verify' => false]);
Route::get('/', 'FrontController@index')->name('acceuil');
Route::get('/manage', 'BackController@contact')->name('manage_index');

Route::get('/mailus', 'FrontController@mailus')->name('mailus');
Route::post('/mailus/send', 'FrontController@send')->name('mailus_send');
Route::get('/{locale}', 'FrontController@languages')->name('languages');
//contact
Route::get('/manage/contacts', 'BackController@contact')->name('contacts');
Route::get('/manage/contacts/{id}', 'BackController@contactShow')->name('contacts_show');
Route::get('/manage/contacts/delete/{id}', 'BackController@deleteContact')->name('contacts_delete');
//maison
Route::get('/manage/maisons', 'BackController@maisons')->name('maisons');
Route::get('/manage/maisons/edit/{rang}', 'BackController@editMaison')->name('maisons_edit');
Route::get('/manage/maisons/add/{rang}', 'BackController@add')->name('maisons_add');
Route::post('/manage/maisons/store/', 'BackController@store')->name('maisons_store');
Route::post('/manage/maisons/update', 'BackController@updateMaison')->name('maisons_update');

Route::get('/home', 'HomeController@index')->name('home');
