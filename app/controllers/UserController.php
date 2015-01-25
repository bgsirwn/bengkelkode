<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Route::currentRouteName()=="api.v1.user.index"){
			$users = User::all();
			return Response::json(array('users'=>$users->toArray()),200);
		}
		else{
			return 'Access denied';
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$rules = array(
					'name'=>'required',
					'username'=>'required|unique:users|min:8|max:12',
					'email'=>'required|unique:users',
					'password'=>'required|min:6',
					'g-recaptcha-response'=>'required|recaptcha'
				);
		$validator = Validator::make($data,$rules);
		$validated = $validator->passes();
		if ($validated) {
			$user = new User;
			$user->username = $data['username'];
			$user->email = $data['email'];
			$user->password = Hash::make($data['password']);
			$user->name = $data['name'];
			$user->followers = "[]";
			$user->following = "[]";
			$user->photo = "pp_blank.jpeg";
			$user->save();
			Auth::loginUsingId($user->id);
			return Redirect::route('dashboard');
		}
		else{
			return Redirect::route('signup')->withInput()->withErrors($validator);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		$user = User::where('username',$username)->get();	
		if($user->count()>0){
			if (Route::currentRouteName()!='api.v1.user.show') {
				foreach ($user as $data) {
					$followed = UserController::isFollowed($username);
					$followers = json_decode($data->followers);
					$following = json_decode($data->following);
					$showButton = true;
					if(Auth::check()){
						if (Auth::user()->username==$username) {
							$showButton = false;
						}
					}
					return View::make('profile', array('output'=>$data, 'followed'=>$followed, 'followers'=>$followers, 'showButton'=>$showButton));
				}
			}
			else{
				foreach ($user as $data) {
					$followed = UserController::isFollowed($username);
					$followers = json_decode($data->followers);
					$following = json_decode($data->following);
					$showButton = true;
					if(Auth::check()){
						if (Auth::user()->username==$username) {
							$showButton = false;
						}
					}
					return Response::json(array(
						'output'=>$data, 
						'followed'=>$followed, 
						'followers'=>$followers,
						'following'=>$following, 
						'showButton'=>$showButton),200
					);
				}
			}
		}
		else{
			return "Data doesn't exist";
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id=null)
	{
		$data = Input::all();
		$data['photo'] = Input::file('photo');
		$rules = array(
			'name'=>'required',
			'username'=>'required|unique:users,username,'.Auth::id().'|min:8|max:12',
			'photo'=>'image'
		);
		$validator = Validator::make($data,$rules);
		$validated = $validator->passes();
		$photo = "";
		$moved = "";
		if ($validated) {
			//upload foto
			if($data['photo']!=''){
				$exists = true;
				while($exists){
					$photo = new BengkelKodingController;
					$photo = $photo->generateRandomString(20).'.png';
					if(User::where('photo',$photo)->count()==0){
						$exists = false;
					}

				}

				$moved = $data['photo']->move('dist/images', $photo);
			}
			//update profile
			$user = User::find(Auth::id());
			$user->name = $data['name'];
			$user->username = $data['username'];
			$user->bio = $data['bio'];
			$user->photo = Input::file('photo')==null ? $user->photo : $photo;
			$user->save();
			return Redirect::route('setting')->withErrors($moved ? '':$photo);
		}
		else{
			return Redirect::route('setting')->withInput()->withErrors($validator);
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
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
		if (Auth::check()) {
			if ($username==Auth::user()->username) {
				$followed = false;
			}
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

	function setting(){
		$user = User::find(Auth::id());
		return View::make('setting', array('user'=> $user));
	}
}
