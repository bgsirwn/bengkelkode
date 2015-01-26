<?php
class ThreadController extends BaseController{

	function post(){
		$data = Input::all();
		$rules = array(
			'title'=>'required',
			'thread'=>'required',
			'tag'=>'required',
			'type'=>'required',
			'g-recaptcha-response'=>'required|recaptcha'
		);
		$validator = Validator::make($data,$rules);
		$validated = $validator->passes();
		if($validated){
			$thread = new Thread;
			$thread->user_id = Auth::id();
			$thread->title = $data['title'];
			$thread->thread = htmlentities($data['thread']);
			$thread->tag = $data['tag'];
			$thread->type = $data['type'];
			$thread->view = 0;
			$thread->votes = '[]';
			$thread->answered = '0';
			$thread->save();
			return Redirect::route('thread.detail', array(Auth::user()->username, $thread->id));
		}
		else{
			return Redirect::route('create')->withErrors($validator);
		}
	}

	function discover(){
		Config::set('view.pagination','pagination::simple');
		$data = Thread::orderBy('created_at', 'desc')->simplePaginate(10);
		foreach ($data as $key) {
			$countComments = Answer::where('thread_id',$key->id)->count();
			$key['comments'] = $countComments;
		}
		return View::make('discover',array('output'=>$data));
	}

	function dashboard(){
		// $following = json_decode(User::find(Auth::id())->following);
		// $thread = Thread::orderBy('created_at', 'desc')->where('user_id','=',Auth::id());
		// foreach ($following as $key) {
		// 	$thread = $thread->orWhere('user_id','=',$key->id);
		// }
		// $thread = $thread->get();
		$user = User::where('username','=',Auth::user()->username)->get();
		foreach ($user as $key) {
			$id = $key->id;
		}
		$data = Thread::where('user_id','=',$id)->orderBy('created_at', 'desc')->simplePaginate(10);
		return View::make('dashboard', array('output'=>$data));
	}

	function edit($username, $id){
		$user = User::where('username',$username)->first();
		$data = Thread::where('id',$id)->where('user_id',$user->id)->orderBy('created_at', 'desc')->first();		return View::make('thread-edit', array('output'=>$data));
	}

	function threadDetail($username=null, $id=null){
		$user = User::where('username',$username)->first();
		$data = Thread::where('id',$id)->where('user_id',$user->id)->orderBy('created_at', 'desc')->get();
		$answer = Answer::where('thread_id',$id)->get();
		$addView = Cache::add(Auth::check() ? Auth::user()->username."AddThreadView".$id : "anonymous"."AddThreadView".$id, $data[0]->id, 60*60*24*7);
		if ($addView) {
			$th = Thread::find($id);
			$th->view = $th->view+1;
			$th->save();
		}
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

	function update($username, $id){
		$data = Input::all();
		$rules = array(
			'title'=>'required',
			'thread'=>'required',
			'tag'=>'required',
			'type'=>'required',
			'g-recaptcha-response'=>'required|recaptcha'
		);
		$validator = Validator::make($data,$rules);
		$validated = $validator->passes();
		if($validated){
			$thread = Thread::find($id);
			$thread->user_id = Auth::id();
			$thread->title = $data['title'];
			$thread->thread = htmlentities($data['thread']);
			$thread->tag = $data['tag'];
			$thread->type = $data['type'];
			$thread->view = 0;
			$thread->save();
			return Redirect::route('thread.detail', array(Auth::user()->username, $thread->id));
		}
		else{
			return Redirect::route('thread.edit', array($username,$id))->withErrors($validator);
		}
	}

}