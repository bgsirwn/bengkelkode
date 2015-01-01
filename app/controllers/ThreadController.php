<?php
class ThreadController extends BaseController{

	function post(){
		$data = Input::all();
		$thread = new Thread;
		$thread->user_id = Auth::id();
		$thread->title = $data['title'];
		$thread->thread = htmlentities($data['thread']);
		$thread->tag = 'null';
		$thread->save();
		return Redirect::route('discover');
	}

	function discover(){
		$data = Thread::orderBy('created_at', 'desc')->get();
		return View::make('discover',array('output'=>$data));
	}

	function threadDetail($username=null, $id=null){
		$user = User::where('username','=',$username)->get();
		foreach ($user as $key) {
			$user_id = $key->id;
		}

		$data = Thread::where('user_id','=',$user_id)->where('id','=',$id)->orderBy('created_at', 'desc')->get();
		return View::make('discover',array('output'=>$data));
	}

	function threadByUsername($username=null){
		$user = User::where('username','=',$username)->get();
		foreach ($user as $key) {
			$id = $key->id;
		}
		$data = Thread::where('user_id','=',$id)->orderBy('created_at', 'desc')->get();
		return View::make('discover',array('output'=>$data));
	}

}