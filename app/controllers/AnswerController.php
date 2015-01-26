<?php

class AnswerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	public function store($username=null,$id=null)
	{
		$data = Input::all();
		$rules = [
			'answer'=> 'required',
			'g-recaptcha-response' => 'required|recaptcha'
		];
		$validator = Validator::make($data,$rules);
		if($validator->passes()){
			$comment = new Answer;
			$comment->user_id = Auth::id();
			$comment->thread_id = $id;
			$comment->answer= htmlentities(Input::get('answer'));
			$comment->votes = "[]";
			$comment->save();
			
			//notif
			$notif = new Notification;
			$notif->store($id, 1);
		}
		return Redirect::route('thread.detail', array($username, $id))->withErrors($validator);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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


}
