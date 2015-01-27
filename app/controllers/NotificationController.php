<?php

class NotificationController extends \BaseController {

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
	public function store($id,$type)
	{
		if ($type=1) {
			$answer = new Answer;
			$data = $answer->getUserInvolvedOnThread($id);
			for ($i=0; $i < count($data); $i++) { 
				if ($data[$i]!=Auth::id()) {
					$notification = new Notification;
					$notification->user_id = $data[$i];
					$notification->user_sender = Auth::id();
					$notification->type = $type;
					$notification->effected = $id;
					$notification->seen = 0;
					$notification->clicked = 0;
					$notification->save();
				}
			}
		}
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

	function getNotifications(){
		$notif = Notification::where('user_id','=',Auth::id())->orderBy('created_at', 'desc')->get();
		$unseen_notif = Notification::where('user_id','=',Auth::id())->where('seen','=',0)->orderBy('created_at', 'desc')->get();
		foreach ($notif as $key) {
			switch ($key->type) {
				case 1:
					$message = User::find($key->user_sender)->name." menjawab thread ";
					if (Thread::find($key->effected)->user_id==Auth::id()) {
						$message.="anda ";
					}
					else{
						$message.=User::find(Thread::find($key->effected)->user_id)->name;
					}
					$link = route('notif.read',array('id'=>$key->id));
					break;
				
				default:
					# code...
					break;
			}
			$key['message'] = $message;
			$key['link'] = $link;
		}
		Session::put('notifications',$notif);
		Session::put('unseen_notif',count($unseen_notif));
	}

	function readNotif(){
		// route('notif.read',array(User::find(Thread::find($key->effected)->user_id)->username,$key->effected));
		$notif = Notification::find(Input::get('id'));
		$notif->clicked = 1;
		$notif->seen = 1;
		$notif->save();
		switch ($notif->type) {
			case 1:
				$link = route('thread.detail', array(User::find(Thread::find($notif->effected)->user_id)->username, $notif->effected));
				break;
			
			default:
				# code...
				break;
		}

		return Redirect::to($link);
	}

}
