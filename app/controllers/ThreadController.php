<?php
class ThreadController extends BaseController{

	function index($username){
		$user = User::where('username',$username)->first();
		$thread = Thread::where('user_id',$user->id)->orderBy('created_at', 'desc')->get();
		foreach ($thread as $key) {
			$countComments = Answer::where('thread_id',$key->id)->count();
			$key['comments'] = $countComments;
		}
		return Response::json(array('thread'=>$thread->toArray()),200);
	}

	function post(){
		$data = Input::all();
		$rules = array(
			'title'=>'required',
			'thread'=>'required',
			'tag'=>'required',
			'type'=>'required',
			'g-recaptcha-response'=>Config::get('app.recaptcha') ? 'required|recaptcha' : ''
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
		$thread = Thread::orderBy('created_at', 'desc')->simplePaginate(10);
		foreach ($thread as $key) {
			$countComments = Answer::where('thread_id',$key->id)->count();
			$key['comments'] = $countComments;
		}
		return View::make('discover',array('thread'=>$thread));
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
		$thread = Thread::where('id',$id)->where('user_id',$user->id)->orderBy('created_at', 'desc')->first();
		return View::make('create', array('thread'=>$thread));
	}

	function show($username=null, $id=null){
		$user = User::where('username',$username)->first();
		$thread = Thread::where('id',$id)->where('user_id',$user->id)->orderBy('created_at', 'desc')->get();
		$answer = Answer::where('thread_id',$id)->orderBy('votes_count','desc')->get();
		$voted = ThreadController::isVoted($id);
		$vote_link = route($voted ? 'unvote.thread':'vote.thread',array('id'=>$id));
		if(Route::currentRouteName()!="api.v1.user.thread.show"){
			$addView = Cache::add(Auth::check() ? Auth::user()->username."AddThreadView".$id : "anonymous"."AddThreadView".$id, $thread[0]->id, 60*60*24*3);
			if ($addView) {
				$th = Thread::find($id);
				$th->view = $th->view+1;
				$th->save();
			}
			foreach ($answer as $as) {
				$answer_voted = new AnswerController;
				$answer_voted = $answer_voted->isVoted($as->id);
				$as['button'] = $answer_voted ? 'unvote' : 'vote';
				$as['voted_link'] = route($answer_voted ? 'unvote.answer':'vote.answer',array('id'=>$as->id));
			}
			return View::make('discover',array('thread'=>$thread, 'answer'=>$answer, 'button'=> $voted ? 'unvote' : 'vote', 'vote_link'=>$vote_link));
		}
		else{
			return Response::json(array(
				'thread'=>$thread->toArray()),200
			);
		}
	}

	function threadByUsername($username=null){
		$user = User::where('username','=',$username)->get();
		foreach ($user as $key) {
			$id = $key->id;
		}
		$thread = Thread::where('user_id','=',$id)->orderBy('created_at', 'desc')->simplePaginate(10);
		return View::make('discover',array('thread'=>$thread));
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
			$thread->save();
			if(Route::currentRouteName()!="api.v1.user.thread.update")
				return Redirect::route('thread.detail', array(Auth::user()->username, $thread->id));
			else
				return Response::json(array('thread'=>$thread->toArray()),200);
		}
		else{
			return Redirect::route('thread.edit', array($username,$id))->withErrors($validator);
		}
	}

	function vote($id){
		$user = User::find(Auth::id());
		$thread = Thread::find($id);
		$votes = json_decode($thread->votes);
		
		//periksa apakah user sudah mengikuti atau belum
		$voted = ThreadController::isVoted($id);
		
		if (!$voted&&$thread->user_id!=$user->id) {
			$votes[count($votes)] = array('id'=>$user->id);
			$thread->votes = json_encode($votes);
			$thread->save();
		}
		return Redirect::route('thread.detail', array(User::find($thread->user_id)->username,$thread->id));
	}

	function unvote($id){
		$user = User::find(Auth::id());
		$thread = Thread::find($id);
		$votes = json_decode($thread->votes);
		
		$new_votes = array();
		for ($i=0; $i < count($votes); $i++) { 
			if ($votes[$i]->id!=$user->id) {
				$new_votes[count($new_votes)] = array('id'=>$votes[$i]->id);
			}
		}
		$thread->votes = json_encode($new_votes);
		$thread->save();
		return Redirect::route('thread.detail', array(User::find($thread->user_id)->username,$thread->id));
	}

	function isVoted($id){
		$voted = false;
		$thread = Thread::find($id);
		$votes = json_decode($thread->votes);
		if (count($votes)>0) {
			for ($i=0; $i < count($votes); $i++) { 
				if (Auth::id()==$votes[$i]->id) {
					$voted = true;
				}
			}
		}
		return $voted;
	}

}