<?php
class BengkelKodingController extends BaseController{
	function index(){
		return View::make('home');
	}

	function auth(){
		$post = Input::all();
		if (!filter_var($post['username'], FILTER_VALIDATE_EMAIL)) {
			$first = 'username';
		}
		else{
			$first = 'email';
		}

		if (Auth::attempt(array($first=>$post['username'], 'password'=>$post['password']), true)) {
			if(Input::has('redirect'))
				return Redirect::to(convert_uudecode(Input::get('redirect')));
			else
				return Redirect::route('dashboard');
		}
		else{
			if(Input::has('redirect'))
				return Redirect::to(convert_uudecode(Input::get('redirect')))->withErrors(['Login failed']);
			else
				return Redirect::route('login')->withInput()->withErrors(['Login failed']);
		}
	}

	function signup(){
		return View::make('signup');
	}

	function login($msg = ""){
		return View::make('login', array('msg'=>$msg));
	}

	function tes(){
		$users = DB::table('users')->where('id','<',200)->get();
		return "<pre>".var_dump($users);
	}

	function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}
}