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
		return Redirect::route('thread.detail', array(Auth::user()->username, $thread->id));
	}

	function discover(){
		$data = Thread::orderBy('created_at', 'desc')->get();
		return View::make('discover',array('output'=>$data));
	}

	function dashboard(){
		$following = json_decode(User::find(Auth::id())->following);
		$thread = Thread::orderBy('created_at', 'desc')->where('user_id','=',Auth::id());
		foreach ($following as $key) {
			$thread = $thread->orWhere('user_id','=',$key->id);
		}
		$thread = $thread->get();
		return View::make('dashboard', array('output'=>$thread));
	}

	function threadDetail($username=null, $id=null){
		$user = User::where('username','=',$username)->get();
		foreach ($user as $key) {
			$user_id = $key->id;
		}

		$data = Thread::where('id','=',$id)->orderBy('created_at', 'desc')->get();
		$answer = Answer::where('thread_id','=',$id)->get();
		return View::make('discover',array('output'=>$data, 'answer'=>$answer));
	}

	function threadByUsername($username=null){
		$user = User::where('username','=',$username)->get();
		foreach ($user as $key) {
			$id = $key->id;
		}
		$data = Thread::where('user_id','=',$id)->orderBy('created_at', 'desc')->get();
		return View::make('discover',array('output'=>$data));
	}

	function postAnswer($username, $id){
		$data = Input::all();
		$comment = new Answer;
		$comment->user_id = Auth::id();
		$comment->thread_id = $id;
		$comment->answer= htmlentities(Input::get('answer'));
		$comment->save();
		$answer = new Notification;
		$answer->store($id, 1);
		return Redirect::route('thread.detail', array($username, $id));
	}

}