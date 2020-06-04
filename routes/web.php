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

// List of users
Route::get('/home', 'HomeController@index')->name('home');

// Chat
Route::get('/chat', 'ChatsController@index');

Route::get('messages', 'ChatsController@retrieveMessages');
Route::post('messages', 'ChatsController@sendMessage');
