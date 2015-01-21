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

//API FOR USERS TABLE
Route::group(array('prefix'=>'api/v1', 'before'=>'auth'), function(){
	Route::resource('user', 'UserController');
});

Route::group(array('before'=>'unauth'), function(){
	Route::get('signup', array(
		'as'=>'signup',
		'uses'=>'BengkelKodingController@signup'
	));

	Route::get('login', array(
		'as'=>'login',
		'uses'=>'BengkelKodingController@login'
	));
	
	Route::get('/', array(
		'as'=>'home',
		'uses'=>'BengkelKodingController@index'
	));
});

Route::post('login', array(
	'as'=>'login.auth',
	'uses'=>'BengkelKodingController@auth'
));

Route::post('signup', array(
	'as'=>'sigmeup', 
	'uses'=>'UserController@store'
));

Route::get('tes', array(
	'as'=>'test',
	'uses'=>function(){
		return View::make('tes');
}));

Route::post('tes', function(){
	$rules = [
	    'g-recaptcha-response' => 'required|recaptcha'
	];

	$validator = Validator::make(Input::all(), $rules);
	$validated = $validator->passes();

	$response = '';
	if ( ! $validated) {
	    $response .= '<pre>' . print_r($validator->errors()->all(), true) . '</pre>';
	}

	$response .= 'Did I validate? ' . ($validated ? 'Yes.' : 'No.');

	return $response;
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
		return View::make('setting');
	}
));

Route::get('{username}', array(
	'as'=>'profile', 
	'uses'=>'UserController@show'
));

Route::get('{username}/thread', array(
	'as'=>'thread.username', 
	'uses'=>'ThreadController@threadByUsername'
));

Route::get('{username}/thread/{id}', array(
	'as'=>'thread.detail',
	'uses'=>'ThreadController@threadDetail'))->where('id', '[0-9]+'
);