<?php
class BengkelKodingController extends BaseController{
	function index(){
		$categories = Category::all();

		foreach ($categories as $category) {
			$jumlah = Thread::where('category_id',$category->id)->count();
			$category['jumlah'] = $jumlah;
		}

		$hotThreads = Thread::where('type',1)->orderBy('view', 'desc')->take(10)->get();

		return View::make('tampilan/home2', [
			'categories'	=>	$categories,
			'hotThreads'	=>	$hotThreads
		]);
	}

	function auth(){
		$post = Input::all();
		if (!filter_var($post['username'], FILTER_VALIDATE_EMAIL)) {
			$first = 'username';
		}
		else{
			$first = 'email';
		}

		if (Auth::attempt([$first=>$post['username'], 'password'=>$post['password']], Input::has('forever') ? true : false)) {
			if(Input::has('redirect'))
				return Redirect::to(convert_uudecode(Input::get('redirect')));
			else
				return Redirect::route('dashboard');
		}
		else{
			$message = "Password invalid";
			if(User::where('username',$post['username'])->orwhere('email',$post['username'])->count()==0){
				$message = "User unregistered";	
			}
			if(Input::has('redirect'))
				return Redirect::route('login', array('redirect'=>Input::get('redirect')))->withInput()->withErrors([$message]);
			else{
				return Redirect::route('login')->withInput()->withErrors([$message]);
			}
		}
	}

	function signup(){
		return View::make('tampilan/signup');
	}

	function login($msg = ""){
		return View::make('tampilan/login', array('msg'=>$msg));
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