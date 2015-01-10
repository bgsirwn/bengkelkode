<?php
class NotificationController extends Controller{
	function getNotifications(){
		$notif = Notification::where('user_id','=',Auth::id())->orderBy('created_at', 'desc')->get();
		$data = '[';
		$i = 0;
		$end = count($notif)-1;
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
					$link = route('thread.detail',array(User::find(Thread::find($key->effected)->user_id)->username,$key->effected));
					break;
				
				default:
					$message = "null";
					break;
			}
			$data .= '{"id":"'.$key->id.'","user_id":"'.$key->user_id.'","user_sender":"'.$key->user_sender.'","type":"'.$key->type.'","effected":"'.$key->effected.'","seen":"'.$key->seen.'","clicked":"'.$key->clicked.'","created_at":"'.$key->created_at.'","updated_at":"'.$key->updated_at.'",';
			$data .= '"message":"'.$message.'","link":"'.$link.'"}';
			if($i<$end)
				$data .= ",";
			$i++;
		}
		$data .= ']';
		Session::put('notifications',json_decode($data));
	}
}