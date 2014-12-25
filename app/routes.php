<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');
Route::resource('/bat-dong-san/dang-tin', 'PropertiesController@create');
Route::get('/cities/{id}/districts', 'AreaController@districts');
Route::get('/districts/{id}/wards', 'AreaController@wards');
Route::get('/{slug}', 'PropertiesController@show');
