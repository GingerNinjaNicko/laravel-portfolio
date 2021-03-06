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

Route::get('/', 'WelcomeController')->name('welcome');

Route::post('/contact-us', 'ContactUsController@store')->name('contact-us');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/examples')->group(function () {
    Route::prefix('/merch')->name('examples.merch.')->group(function () {
        Route::get('/', 'MerchController@index')->name('index');
        Route::get('/create', 'MerchController@create')->name('create');
        Route::post('/', 'MerchController@store')->name('store');
        Route::get('/{merch}', 'MerchController@show')->name('show');
        Route::get('/{merch}/edit', 'MerchController@edit')->name('edit');
        Route::put('/{merch}', 'MerchController@update')->name('update');
        Route::delete('/{merch}', 'MerchController@destroy')->name('destroy');
    });
});
