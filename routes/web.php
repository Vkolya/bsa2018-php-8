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

Route::prefix('currencies')->group(function () {
    Route::get('/','CurrencyController@index')->name('currencies-list');
    Route::get('/add', 'CurrencyController@create')->name('currencies-create');
    Route::get('/{id}','CurrencyController@show')->name('currencies-show');
    Route::post('/', 'CurrencyController@store')->name('currencies-store');
    Route::get('/{id}/edit', 'CurrencyController@edit')->name('currencies-edit');
    Route::put('/{id}', 'CurrencyController@update')->name('currencies-update');
    Route::delete('/delete/{id}', 'CurrencyController@delete')->name('currencies-delete');
});
 

