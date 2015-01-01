<?php 
class UserController extends BaseController{
	function index($username){
		$user = User::where('username','=',$username)->get();	
		foreach ($user as $data) {
			return View::make('profile', array('output'=>$data));
		}
	}
}