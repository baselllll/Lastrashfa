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

Route::prefix('front/')->group(function() {
    Route::get('index', 'FrontController@index')->name('homepage');
    Route::get('allcategory', 'FrontController@allcategory')->name('allcategory');
    Route::get('contactus', 'FrontController@contactus')->name('contactus');
    Route::post('lo-re/login', 'FrontController@login')->name('login');
    Route::post('lo-re/register', 'FrontController@register')->name('register');
    Route::get('lo-re', 'FrontController@registerUI')->name('ui');
    Route::get('profile', 'FrontController@profile')->name('profile');
    Route::get('logout', 'FrontController@logout')->name('logout');
    Route::post('update_user/{id}', 'FrontController@update_user')->name('update_user');
    Route::get('additem/{name}/{section}/{id}', 'FrontController@additem')->name('additem');
    Route::get('pay/{cat_id}/{name}/{section}/{sm}/{md}/{lg}/{leter}/{leterhalf}/{fiveleter}', 'FrontController@pay')->name('pay');
    Route::post('add_cart', 'FrontController@add_cart')->name('add_cart');
    Route::get('delete_request/{id}', 'FrontController@delete_request')->name('delete_request');
});
