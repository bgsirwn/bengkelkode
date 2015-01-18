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

Route::get('tes', function(){
	return View::make('tes');
});

Route::group(array('before'=>'auth'), function(){
	
	Route::get('dashboard', array(
		'as'=>'dashboard',  
		'uses'=>'ThreadController@dashboard'
	));

	Route::get('follow', array(
		'as' => 'follow',
		'uses' => 'UserController@follow'
	));

	Route::get('unfollow', array(
		'as' => 'unfollow',
		'uses' => 'UserController@unfollow'
	));

	Route::get('logout', array(
		'as'=>'logout',
		'uses'=>function(){
			Auth::logout();
			return Redirect::route('home');
		}
	));

	Route::get('get/notification', array(
		'as' => 'notif.read',
		'uses' => 'NotificationController@readNotif'
	));

	Route::post('{username}/thread/{id}', array(
		'as'=>'post.answer',
		'before'=>'csrf',
		'uses'=>'ThreadController@postAnswer'
	));
	
	Route::post('create', array(
		'before'=>'csrf',
		'uses'=>'ThreadController@post'
	));
	
	Route::post('password/reset', array(
		'before'=>'csrf',
		'as' => 'postReset',
		'uses' => 'RemindersController@postReset'
	));

});


Route::get('create', array('as'=>'create', 'before'=>'auth', function(){
	return View::make('create');
}));


Route::get('discover', array(
	'as'=>'discover',
	'uses'=>'ThreadController@discover'
));

Route::get('setting', array(
	'as'=>'setting',
	'uses'=>function(){
		return 'setting';
	}
));

Route::get('{username}', array(
	'as'=>'profile', 
	'uses'=>'UserController@index'
));

Route::get('{username}/thread', array(
	'as'=>'thread.username', 
	'uses'=>'ThreadController@threadByUsername'
));

Route::get('{username}/thread/{id}', array(
	'as'=>'thread.detail',
	'uses'=>'ThreadController@threadDetail'))->where('id', '[0-9]+'
);