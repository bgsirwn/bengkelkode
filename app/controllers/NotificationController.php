<?php
class NotificationController extends Controller{
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