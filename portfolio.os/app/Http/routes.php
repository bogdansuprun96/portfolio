<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'MainController@index', 'as' => 'home']);
Route::get('/portfolio', 'MainController@portfolio');

Route::match(['get', 'post'], '/order', ['uses' => 'MainController@order', 'as' => 'order']);

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', ['uses' => 'HomeController@index', 'as' => 'admin-index']);
        Route::get('/profile', ['uses' => 'HomeController@profile', 'as' => 'admin-profile']);
        Route::group(['prefix' => 'update'], function () {
            Route::post('/profile/', ['uses' => 'HomeController@updateUser', 'as' => 'update-user']);
        });
    });
});