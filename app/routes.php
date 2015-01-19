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
Route::get('/bat-dong-san/dang-tin', 'ListingsController@create');
Route::get('/cities/{id}/districts', 'AreasController@districts');
Route::get('/districts/{id}/wards', 'AreasController@wards');
Route::get('categories/{id}/subcategories', 'CategoriesController@subcategories');
Route::post('/images/tmp', 'ImagesController@storeTemp');
Route::delete('/images/tmp/{id}', 'ImagesController@destroyTemp');

// Filter
Route::post('/login', function()
{
    $credentials = Input::only('username', 'password');
    if (Auth::attempt($credentials)) {
        return Redirect::intended('/');
    }
    return Redirect::to('login');
});

// Login, logout & signup
Route::get('/login', function ()
{
    if (!Auth::guest()) {
        return Redirect::to('/');
    }
    return View::make('sessions.create');
});

Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});

Route::get('/signup', function ()
{
    return View::make('users.create');
});
/*
 * Resource controllers
 */
Route::resource('categories', 'CategoriesController');
Route::resource('images', 'ImagesController');
Route::resource('listings', 'ListingsController');

Route::resource('sessions', 'SessionsController');
Route::resource('users', 'UsersController');

Route::get('/account', 'AccountController@index');
// DO NOT put any routes (except error and logging) after the following
Route::get('/{slug}', 'ListingsController@show');

App::missing(function($exception)
{
    return Response::view('404', array(), 404);
});