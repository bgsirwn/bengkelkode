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

// API
// Route::group(array('prefix'=>'api/v1'), function(){
// 	Route::resource('notification', 'NotificationController');
// 	Route::resource('user', 'UserController');
// 	Route::group(array('before'=>'auth'), function(){
// 		Route::resource('user.thread', 'ThreadController');
// 		Route::resource('user.thread.answer', 'AnswerController');
// 	});
// });

Route::group(['before'=>'unauth'], function(){
	
	Route::get('signup', [
		'as'	=>	'signup',
		'uses'	=>	'BengkelKodingController@signup'
	]);

	Route::get('signin', [
		'as'	=>	'login',
		'uses'	=>	'BengkelKodingController@login'
	]);

	Route::get('/', [
		'as'	=>	'home',
		'uses'	=>	'BengkelKodingController@index'
	]);

	Route::post('signin', [
		'as'	=>	'login.auth',
		'uses'	=>	'BengkelKodingController@auth'
	]);

	Route::post('signup', [
		'as'	=>	'signmeup',
		'uses'	=>	'UserController@store'
	]);
});

Route::group(['before'=>'auth'], function(){
	Route::get('dashboard',[
		'as'	=>	'dashboard',
		'uses'	=>	'ThreadController@dashboard'
	]);

	Route::get('logout', [
		'as'	=>	'logout',
		'uses'	=>	'UserController@logout'
	]);


	Route::post('registration/skip', [
		'as'	=>	'registration.skip',
		'uses'	=>	'UserController@skip'
	]);

	Route::get('{username}/follow', [
		'as'	=>	'follow',
		'uses'	=>	'UserController@follow'
	]);

	Route::get('{username}/unfollow', [
		'as'	=>	'unfollow',
		'uses'	=>	'UserController@unfollow'
	]);

	Route::get('create', [
		'as'	=>	'create',
		'uses'	=>	function(){
			return View::make('create');
		}
	]);

	Route::get('setting', [
		'as'	=>	'setting',
		'uses'	=>	'UserController@setting'
	]);
});


Route::group(array('before'=>'auth'), function(){
	Route::get('vote/thread/{id}', array(
		'as' => 'vote.thread',
		'uses' => 'ThreadController@vote'
	));

	Route::get('unvote/thread/{id}', array(
		'as' => 'unvote.thread',
		'uses' => 'ThreadController@unvote'
	));

	Route::get('vote/answer/{id}', array(
		'as' => 'vote.answer',
		'uses' => 'AnswerController@vote'
	));

	Route::get('unvote/answer/{id}', array(
		'as' => 'unvote.answer',
		'uses' => 'AnswerController@unvote'
	));

	Route::get('get/notification', array(
		'as' => 'notif.read',
		'uses' => 'NotificationController@readNotif'
	));

	Route::post('setting', array(
		'as'=>'setting.post',
		'uses'=>'UserController@update'
	));

	Route::get('{username}/thread/{id}/edit', array(
		'as'=>'thread.edit',
		'uses'=>'ThreadController@edit'
	));

	Route::put('{username}/thread/{id}/edit', array(
		'as'=>'thread.edit',
		'before'=>'csrf',
		'uses'=>'ThreadController@update'
	));
	
	Route::post('create', array(
		'before'=>'csrf',
		'uses'=>'ThreadController@post'
	));
	
	Route::post('password/reset', array(
		'before'=>'csrf',
		'as' => 'post.reset',
		'uses' => 'RemindersController@postReset'
	));

	Route::post('{username}/thread/{id}', array(
		'as'=>'post.answer',
		'before'=>'csrf',
		'uses'=>'AnswerController@store'
	));
});


Route::get('discover', array(
	'as'=>'discover',
	'uses'=>'ThreadController@discover'
));

Route::get('{username}', array(
	'as'=>'profile', 
	'uses'=>'UserController@show'
));

Route::get('confirmation/{token}', array(
	'as'=>'confirmation',
	'uses'=>'UserController@confirm'
));

Route::get('{username}/thread', array(
	'as'=>'thread.username', 
	'uses'=>'ThreadController@threadByUsername'
));

Route::get('{username}/followers', array(
	'as'=>'profile.followers',
	'uses'=>'UserController@followers'
));

Route::get('{username}/thread/{id}', array(
	'as'=>'thread.detail',
	'uses'=>'ThreadController@show'))->where('id', '[0-9]+'
);