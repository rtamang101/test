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
    return view('login');
});

Route::post('/login','UserController@login');


Route::get('/registration_view','UserController@reg_view')->name('reg_view');

Route::post('/register','UserController@register');

Route::post('/send_message','UserController@send_message');

Route::get('/get_message/{dep_id}/{id}','UserController@get_message');

Route::post('get_message/{id}/send_responce','UserController@send_responce');

Route::get('get_messages','UserController@get_messages');

Route::get('/status', function () {
    return view('status');
})->name('status');