<?php

class AnswerController extends \BaseController {

	public function index($username, $thread_id){
		$user = User::where('username',$username)->first();
		$answer = Answer::where('user_id',$user->id)->where('thread_id',$thread_id)->get();
		
		return Response::json(array('answer'=>$answer->toArray()),200);
	}

	public function show($username,$thread_id,$answer_id){
		$user = User::where('username',$username)->first();
		$answer = Answer::where('user_id',$user->id)->where('thread_id',$thread_id)->where('id',$answer_id)->get();
		return Response::json(array('answer'=>$answer->toArray()),200);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($username, $thread_id)
	{
		$data = Input::all();
		$recaptcha = Config::get('recaptcha') ? 'required|recaptcha' : '';
		$rules = [
			'answer'=> 'required',
			'g-recaptcha-response'=>$recaptcha
		];
		$validator = Validator::make($data,$rules);
		if($validator->passes()){
			$comment = new Answer;
			$comment->user_id = Auth::id();
			$comment->thread_id = $thread_id;
			$comment->answer= htmlentities(Input::get('answer'));
			$comment->votes = "[]";
			$comment->votes_count = count(json_decode($comment->votes));
			$comment->save();
			
			//notif
			$notif = new NotificationController;
			$notif->store($thread_id, 1);
		}
		if(Route::currentRouteName()!='api.v1.user.show.thread.show.answer')
			return Redirect::route('{username}.thread.show', array($username, $thread_id))->withErrors($validator);
		else
			return Response::json(['message'=>'Done'],200);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($username, $thread_id, $answer_id)
	{
		$data = Input::all();
		$rules = [
			'answer'=> 'required',
			'g-recaptcha-response'=>Config::get('app.recaptcha') ? 'required|recaptcha' : ''
		];
		$validator = Validator::make($data,$rules);
		$comment = Answer::find($answer_id);
		if($validator->passes()&&$comment->user_id==Auth::id()){
			$comment->user_id = Auth::id();
			$comment->thread_id = $thread_id;
			$comment->answer= htmlentities(Input::get('answer'));
			$comment->save();
			
			//notifanswer_id
			$notif = new Notification;
			$notif->store($id, 1);
		}
		if(Route::currentRouteName()!='api.v1.user.show.thread.show.answer')
			return Redirect::route('thread.detail', array($username, $id))->withErrors($validator);
		else
			return Response::json(['thread'=>$answer->toArray()],200);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($username, $thread_id, $answer_id)
	{
		$answer = User::where('username',$username)->answers()->where('id',$answer_id)->first();
		$answer->delete();

		return Redirect::to('{username}.thread.show',[$username,$thread_id]);
	}

	function vote($answer_id){
		$user = User::find(Auth::id());
		$answer = Answer::find($answer_id);
		$votes = json_decode($answer->votes);
		$thread = Thread::find($thread_id);
		
		//periksa apakah user sudah mengikuti atau belum
		$voted = AnswerController::isVoted($id);
		
		if (!$voted&&$answer->user_id!=$user->id) {
			$votes[count($votes)] = array('id'=>$user->id);
			$answer->votes = json_encode($votes);
			$answer->votes_count = count($votes);
			$answer->save();

			//point
			$userPoin = User::find($answer->user_id);
			$userPoin->point = $userPoin->point+1;
			$userPoin->save();

			//notif
			$notif = new NotificationController;
			$notif->store($id, 3);
			return Redirect::route('thread.detail', array(User::find($thread->user_id)->username,$thread->id));
		}
		else{
			return Redirect::route('thread.detail', array(User::find($thread->user_id)->username,$thread->id))->withErrors("You can't vote your own answer!");
		}
	}

	function unvote($answer_id){
		$user = User::find(Auth::id());
		$answer = Answer::find($answer_id);
		$votes = json_decode($answer->votes);
		$thread = Thread::find($answer->thread_id);
		
		//point
		$userPoin = User::find($answer->user_id);
		$userPoin->point = $userPoin->point - count($votes);
	
		$new_votes = array();
		for ($i=0; $i < count($votes); $i++) { 
			if ($votes[$i]->id!=$user->id) {
				$new_votes[count($new_votes)] = array('id'=>$votes[$i]->id);
			}
		}
		$answer->votes = json_encode($new_votes);
		$answer->votes_count = count($new_votes);
		$answer->save();

		//point
		$userPoin->point = $userPoin->point + count($new_votes);
		$userPoin->save();
		
		return Redirect::route('thread.detail', array(User::find($thread->user_id)->username,$thread->id));
	}

	function isVoted($id){
		$voted = false;
		$answer = Answer::find($id);
		$votes = json_decode($answer->votes);
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
