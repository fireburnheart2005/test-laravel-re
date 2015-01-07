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
Route::get('/cities/{id}/districts', 'AreasController@districts');
Route::get('/districts/{id}/wards', 'AreasController@wards');
Route::resource('categories', 'CategoriesController');
Route::get('categories/{id}/subcategories', 'CategoriesController@subcategories');

// DO NOT put any routes after the following
Route::get('/{slug}', 'PropertiesController@show');
