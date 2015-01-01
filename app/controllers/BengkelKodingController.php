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
			return Redirect::route('dashboard');
		}
		else{
			return Redirect::route('login')->withErrors(['Login failed']);
		}
	}

	function dashboard(){
		return View::make('dashboard');
	}

	function signup(){
		return View::make('signup');
	}

	function login($msg = ""){
		return View::make('login', array('msg'=>$msg));
	}

	function signMeUp(){
		$post = Input::all();
		//DB::insert("insert into users (id, name, username, email, password) values (?, ?, ?, ?, ?)", array(null, $post['name'], $post['username'], $post['email'], Hash::make($post['password'])));
		
		$id = DB::table('users')->insertGetId(
			array(
				'name' => $post['name'],
				'username' => $post['username'],
				'email' => $post['email'],
				'password' => Hash::make($post['password'])
		));

		Auth::loginUsingId($id);
		// return Redirect::to('login')->with("msg","Data sudah masuk, silakan login!");
		return Redirect::route('dashboard');
	}

	function tes(){
		$users = DB::table('users')->where('id','<',200)->get();
		return "<pre>".var_dump($users);
	}
}