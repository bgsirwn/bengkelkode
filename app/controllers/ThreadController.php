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

	function store($username){
		$data = Input::all();
		$rules = array(
			'title'=>'required',
			'thread'=>'required',
			// 'tag'=>'required',
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
			$thread->tag = json_encode(explode(",", $data['tag']));
			$thread->type = $data['type'];
			$thread->view = 0;
			$thread->votes = '[]';
			$thread->category_id = $data['category'];
			$thread->answered = '0';
			$thread->save();
			return Redirect::route('{username}.thread.show', array(Auth::user()->username, $thread->id));
		}
		else{
			// return Redirect::route('create')->withErrors($validator);
			return $validator->messages();
		}
	}

	function create(){
		$categories = Category::all();
		return View::make('create', ['categories'=>$categories]);
	}

	function delete($username, $thread_id){
		$thread = Thread::where('user_id', User::where('username', $username)->first()->id);
		$thread = $thread->where('id', $thread_id)->first();
		return View::make('delete', [
			'thread'	=>	$thread
		]);
	}

	function destroy($username, $thread_id){
		$thread = Thread::where('user_id', User::where('username', $username)->first()->id);
		$thread = $thread->where('id', $thread_id)->first();
		$thread->delete();
		return Redirect::route('discover');
	}

	function discover(){
		$thread = Thread::where('type',1)->orderBy('created_at', 'desc')->simplePaginate(10);
		foreach ($thread as $key) {
			$countComments = Answer::where('thread_id',$key->id)->count();
			$key['comments'] = $countComments;
			$key['category'] = Category::find($key->category_id);
			$key['tags'] = json_decode($key->tag);
		}

		$categories = Category::all();

		foreach ($categories as $category) {
			$jumlah = Thread::where('category_id',$category->id)->count();
			$category['jumlah'] = $jumlah;
		}


		return View::make('tampilan/discover',array('thread'=>$thread, 'categories'=>$categories));
	}

	function discoverSearch(){
		$data = Input::all();
		if (!Input::has('keyword')) {
			$data['keyword'] = 'allispossible';
		}
		if (!Input::has('category')) {
			$data['category'] = 'allispossible';
		}
		if (!Input::has('tag')) {
			$data['tag'] = 'allispossible';
		}
		return Redirect::route('discover.advanced', $data);
	}

	function discoverInAdvance($keyword, $category, $tag){
		$thread = Thread::where('id','>',0);
		if ($keyword != 'allispossible') {
			$thread = $thread->where('title','like','%'.$keyword.'%');
		}
		if ($category != 'allispossible') {
			$thread = $thread->where('category_id', Category::where('name',$category)->first()->id);
		}
		if ($tag != 'allispossible') {
			$thread = $thread->where('tag', 'like', '%'.$tag.'%');
		}
		$thread = $thread->orderBy('created_at', 'desc')->simplePaginate(10);

		foreach ($thread as $key) {
			$countComments = Answer::where('thread_id',$key->id)->count();
			$key['comments'] = $countComments;
			$key['category'] = Category::find($key->category_id);
			$key['tags'] = json_decode($key->tag);
		}

		$categories = Category::all();

		foreach ($categories as $category) {
			$jumlah = Thread::where('category_id',$category->id)->count();
			$category['jumlah'] = $jumlah;
		}

		return View::make('discover', [
			'categories'	=>	$categories,
			'thread'		=>	$thread
		]);
	}

	function dashboard(){
		// $following = json_decode(User::find(Auth::id())->following);
		// $thread = Thread::orderBy('created_at', 'desc')->where('user_id','=',Auth::id());
		// foreach ($following as $key) {
		// 	$thread = $thread->orWhere('user_id','=',$key->id);
		// }
		// $thread = $thread->get();
		$user = User::where('username','=',Auth::user()->username)->first();
		if ($user->confirmed == 0) {
			return View::make('signup.step0');
		}
		elseif($user->confirmed == 1){
			return View::make('signup.step1');
		}
		elseif($user->confirmed == 2){
			return View::make('signup.step2');
		}
		elseif($user->confirmed == 3){
			return View::make('signup.step3');
		}
		else{
			$id = $user->id;
			$data = Thread::where('user_id','=',$id)->orderBy('created_at', 'desc')->simplePaginate(10);
			return View::make('tampilan/dashboard2', array('output'=>$data));
		}
	}

	function edit($username, $id){
		$user = User::where('username',$username)->first();
		$thread = Thread::where('id',$id)->where('user_id',$user->id)->orderBy('created_at', 'desc')->first();
		$categories = Category::all();
		return View::make('create', [
			'thread'		=>	$thread,
			'categories'	=>	$categories
		]);
	}

	function show($username, $id){
		$user = User::where('username',$username)->first();
		$thread = Thread::where('id',$id)->where('user_id',$user->id)->orderBy('created_at', 'desc')->get();
		$answer = Answer::where('thread_id',$id)->orderBy('votes_count','desc')->get();
		$voted = ThreadController::isVoted($username, $id);
		$vote_link = route($voted ? 'unvote.thread':'vote.thread',array('username'=>$username,'id'=>$id));
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

			$categories = Category::all();

			foreach ($categories as $category) {
				$jumlah = Thread::where('category_id',$category->id)->count();
				$category['jumlah'] = $jumlah;
			}

			return View::make('discover',[
				'thread'=>$thread, 'answer'=>$answer,
				'button'=> $voted ? 'unvote' : 'vote', 
				'username'=>$username,
				'thread_id'=>$id,
				'vote_link'=>$vote_link, 'categories'=>$categories]);
		}
		else{
			return Response::json(array(
				'thread'=>$thread->toArray()),200
			);
		}
	}

	function threadByUsername($username){
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
			'g-recaptcha-response'=>Config::get('app.recaptcha') ? 'required|recaptcha' : ''
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
				return Redirect::route('{username}.thread.show', array(Auth::user()->username, $thread->id));
			else
				return Response::json(array('thread'=>$thread->toArray()),200);
		}
		else{
			return Redirect::route('{username}.thread.edit', [$username,$id])->withErrors($validator);
		}
	}

	function vote($username, $id){
		$user = User::find(Auth::id());
		$thread = Thread::find($id);
		$votes = json_decode($thread->votes);
		
		//periksa apakah user sudah memberi vote atau belum
		$voted = ThreadController::isVoted($username, $id);
		
		if (!$voted&&$thread->user_id!=$user->id) {
			$votes[count($votes)] = array('id'=>$user->id);
			$thread->votes = json_encode($votes);
			$thread->save();
			
			//notif
			$notif = new NotificationController;
			$notif->store($id,2);
			return Redirect::route('{username}.thread.show', array(User::find($thread->user_id)->username,$thread->id));
		}
		else{
			return Redirect::route('{username}.thread.show', array(User::find($thread->user_id)->username,$thread->id))->withErrors("You can't vote your own thread!");
		}
	}

	function unvote($username, $id){
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

	function isVoted($username, $id){
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