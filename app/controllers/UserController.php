<?php 
class UserController extends BaseController{
	function index($username){
		$user = User::where('username','=',$username)->get();	
		if($user->count()>0){
			foreach ($user as $data) {
				$followed = UserController::isFollowed($username);
				return View::make('profile', array('output'=>$data, 'followed'=>$followed));
			}
		}
		else{
			return "Data doesn't exist";
		}
	}

		function followers($username){
		$user = User::where('username','=',$username)->first();
		$statuses = Status::orderby('created_at', 'desc')->where('user_id','=',$user->id)->get();
		$followed = UserController::isFollowed($username);
		return View::make('followers', array('user'=>$user, 'statuses'=>$statuses, 'followed'=>$followed, 'followers'=>json_decode($user->followers),'following'=>json_decode($user->following)));	
	}

	function following($username){
		$user = User::where('username','=',$username)->first();
		$statuses = Status::orderby('created_at', 'desc')->where('user_id','=',$user->id)->get();
		$followed = UserController::isFollowed($username);
		return View::make('following', array('user'=>$user, 'statuses'=>$statuses, 'followed'=>$followed, 'followers'=>json_decode($user->followers),'following'=>json_decode($user->following)));	
	}

	function follow(){
		$user_actor = User::find(Auth::id());
		$user_victim = User::where('username','=',Input::get('username'))->first();
		$following_actor = json_decode($user_actor->following);
		$followers_victim = json_decode($user_victim->followers);
		
		//periksa apakah user sudah mengikuti atau belum
		$followed = UserController::isFollowed(Input::get('username'));
		
		if (!$followed&&Auth::user()->username!=Input::get('username')) {
			$followers_victim[count($followers_victim)] = array('id'=>$user_actor->id);
			$user_victim->followers = json_encode($followers_victim);
			$user_victim->save();
			$following_actor[count($following_actor)] = array('id'=>$user_victim->id);
			$user_actor->following = json_encode($following_actor);
			$user_actor->save();
		}
		return Redirect::route('profile', array(Input::get('username')));
	}

	function unfollow(){
		$user_actor = User::find(Auth::id());
		$user_victim = User::where('username','=',Input::get('username'))->first();
		$following_actor = json_decode($user_actor->following);
		$followers_victim = json_decode($user_victim->followers);
		
		$new_following_actor = array();
		for ($i=0; $i < count($following_actor); $i++) { 
			if ($following_actor[$i]->id!=$user_victim->id) {
				$new_following_actor[count($new_following_actor)] = array('id'=>$following_actor[$i]->id);
			}
		}
		$new_followers_victim = array();
		for ($i=0; $i < count($followers_victim); $i++) { 
			if ($followers_victim[$i]->id!=$user_actor->id) {
				$new_followers_victim[count($new_followers_victim)] = array('id'=>$followers_victim[$i]->id);
			}
		}

		$user_actor->following = json_encode($new_following_actor);
		$user_actor->save();

		$user_victim->followers = json_encode($new_followers_victim);
		$user_victim->save();
		return Redirect::route('profile', array(Input::get('username')));	
	}

	function isFollowed($username){
		$followed = false;
		$user_victim = User::where('username','=',$username)->first();
		$followers_victim = json_decode($user_victim->followers);
		if (count($followers_victim)>0) {
			for ($i=0; $i < count($followers_victim); $i++) { 
				if (Auth::id()==$followers_victim[$i]->id) {
					$followed = true;
				}
			}
		}
		if ($username==Auth::user()->username) {
			$followed = false;
		}
		return $followed;
	}

	function isFollowing($username){
		$is_following = false;
		$user = User::find(Auth::id());
		$user_victim = User::where('username','=',$username)->first();
		$following = json_decode($user->following);

		for ($i=0; $i < count($following); $i++) { 
			if ($following[$i]->id==$user_victim->id) {
				$is_following = true;
			}
		}

		if ($username==Auth::user()->username) {
			$is_following = false;
		}
		return $is_following;
	}
}