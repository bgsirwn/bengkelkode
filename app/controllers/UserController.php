<?php 
class UserController extends BaseController{
	function index($username){
		$user = User::where('username','=',$username)->get();	
		if($user->count()>0){
			foreach ($user as $data) {
				return View::make('profile', array('output'=>$data));
			}
		}
		else{
			return "Data doesn't exist";
		}
	}
}