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
		'uses'	=>	'ThreadController@create'
	]);

	Route::get('setting', [
		'as'	=>	'setting',
		'uses'	=>	'UserController@setting'
	]);

	Route::get('get/notification', [
		'as'	=>	'notif.read',
		'uses'	=>	'NotificationController@readNotif'
	]);

	Route::get('vote/thread/{id}', [
		'as'	=>	'vote.thread',
		'uses'	=>	'ThreadController@vote'
	]);

	Route::get('unvote/thread/{id}', [
		'as'	=>	'unvote.thread',
		'uses'	=>	'ThreadController@unvote'
	]);

	Route::get('vote/answer/{id}', [
		'as'	=>	'vote.answer',
		'uses'	=>	'AnswerController@vote'
	]);

	Route::get('unvote/answer/{id}', [
		'as'	=>	'unvote.answer',
		'uses'	=>	'AnswerController@unvote'
	]);
	
});

Route::get('discover', [
	'as'	=>	'discover',
	'uses'	=>	'ThreadController@discover'
]);

Route::get('{username}', [
	'as'	=>	'profile', 
	'uses'	=>	'UserController@show'
]);

Route::get('confirmation/{token}', array(
	'as'=>'confirmation',
	'uses'=>'UserController@confirm'
));

Route::group(['prefix'=>'{username}'], function(){
	Route::resource('thread', 'ThreadController');
	Route::resource('thread.answer', 'AnswerController');
});

/*
/{username}/thread (get) route('{username}.thread.index')
/{username}/thread (post) storing route('{username}.thread.store',[username])
/{username}/thread/{id} get route('{username}.thread.show', [username, thread_id])
/{username}/thread/{id} (put) update route('{username}.thread.update')
/{username}/thread/{id} (delete) destroy route('{username}.thread.destroy',[$username,$thread_id])
/{username}/thread/{id}/edit nampilkan form
/{username}/thread/{id}/answer (get)
/{username}/thread/{id}/answer (post) storing
/{username}/thread/{id}/answer/{answer_id} 


*/