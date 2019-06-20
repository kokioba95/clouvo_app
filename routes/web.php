<?php

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
Auth::routes();
Route::get('/my_profile', 'HomeController@index')->name('my_profile');
Route::get('/event_create', 'HomeController@create')->name('event_create');
Route::post('/post', 'HomeController@post')->name('post');
Route::get('/user/{id}/edit', 'UserController@edit');
Route::get('/user/{id}/update', 'UserController@update');
Route::get('/event_list', 'EventController@list')->name('event_list');
Route::get('/{id}/event_info', 'EventController@info')->name('event_info');


