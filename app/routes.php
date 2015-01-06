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

Route::get('/', "HomeController@showWelcome");

Route::get('/x', "PagesController@show");

Route::get('/db', function() {

  $users = DB::table('users')->find(1);

  dd($users);

});

/*
Route::get('/', function()
{
	return View::make('hello');
});
 */
