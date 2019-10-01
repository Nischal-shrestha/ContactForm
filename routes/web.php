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
    return view('contact');
})->name('contact');

Route::post('/','ContactController@store')->name('contact.store');

Route::get('/contactlist','ContactController@customers')->name('contact.list');
