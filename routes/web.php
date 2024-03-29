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

Route::get('/', 'HomeController@main')->name('main');
Route::post('/store', 'HomeController@store')->name('store.order');
Route::get('/edit/{id}', 'HomeController@edit')->name('store.edit');
Route::get('/place/{id}', 'HomeController@place')->name('store.place');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
