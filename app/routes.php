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
Route::get('/', array(
	'as'=>'home', 
	'before'=>'unauth', 
	'uses'=>'BengkelKodingController@index'
));

Route::get('signup', array(
	'as'=>'signup',
	'uses'=>'BengkelKodingController@signup'
));

Route::get('login', array(
	'as'=>'login', 
	'uses'=>'BengkelKodingController@login'
));

Route::post('login', array(
	'as'=>'login', 
	'uses'=>'BengkelKodingController@auth'
));

Route::post('signup', array(
	'as'=>'sigmeup', 
	'uses'=>'BengkelKodingController@signMeUp'
));

Route::get('tes', 'RemindersController@getRemind');

Route::get('dashboard', array(
	'as'=>'dashboard', 
	'before'=>'auth', 
	'uses'=>'BengkelKodingController@dashboard'
));

Route::get('logout', array(
	'as'=>'logout', 
	'before'=>'auth', 
	'uses'=>function(){
		Auth::logout();
		return Redirect::route('home');
	}
));

Route::get('create', array('as'=>'create', 'before'=>'auth', function(){
	return View::make('create');
}));

Route::post('create', array('uses'=>'ThreadController@post'));

Route::get('discover', array(
	'as'=>'discover',
	'uses'=>'ThreadController@discover'
));

Route::post('password/reset', array(
	'as' => 'postReset',
	'uses' => 'RemindersController@postReset'
));
Route::get('{username}', array('as'=>'profile', 'uses'=>'UserController@index'));
Route::get('{username}/thread', array('as'=>'thread.username', 'uses'=>'ThreadController@threadByUsername'));
Route::get('{username}/thread/{id}', array('as'=>'thread.detail','uses'=>'ThreadController@threadDetail'));