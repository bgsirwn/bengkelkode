@extends('default')
@section('title')
	{{"Bengkel Koding::Setting"}}
@stop
@section('content')
<?php
$id = 1;
$type = 1;
//jika type-nya satu alias thread yang dikomentari
		if ($type=1) {
			$notifications = Notification::where('type',$type)->where('effected',$id)->get();
			//jika ternyata
			if ($notifications->count()>0) {
				//ambil data user yang terlibat
				$user_involved = json_decode($notifications[0]->user_involved);
				$involved = false;
				//periksa apakah sudah terlibat
				foreach ($user_involved as $key) {
					if ($key->id==Auth::id()) {
						$involved = true;
						break;
					}
				}
				//jika terlibat
				if ($involved) {
					$answer = new Answer;
					$data = $answer->getUserInvolvedOnThread($id);
					for ($i=0; $i < count($data); $i++) { 
						if ($data[$i]!=Auth::id()) {
							$notification = Notification::where('user_id',$data[$i])->where('type',$type)->where('effected',$id)->first();
							$notification->seen = 0;
							$notification->clicked = 0;
							$notification->save();
						}
					}
					echo "terlibat";
				}
				else{//jika tidak terlibat
					$answer = new Answer;
					$data = $answer->getUserInvolvedOnThread($id);
					for ($i=0; $i < count($data); $i++) { 
						if ($data[$i]!=Auth::id()) {
							// $notification = Notification::where('user_id',$data[$i])->where('type',$type)->where('effected',$id)->first();
							// $user_involved = json_decode($notification->user_involved);
							// $user_involved[count($user_involved)] = array('id'=>Auth::id());
							// $notification->user_involved = $user_involved;
							// $notification->seen = 0;
							// $notification->clicked = 0;
							// $notification->save();
							echo "user_id = ".$data[$i];
							echo "<br>type = ".$type;
							echo "<br>effected = ".$id;
						}
					}
				}
			}
			else{
				$answer = new Answer;
				$data = $answer->getUserInvolvedOnThread($id);
				for ($i=0; $i < count($data); $i++) { 
					if ($data[$i]!=Auth::id()) {
						$notification = new Notification;
						$notification->user_id = $data[$i];
						$user_involved = array(array('id'=>Auth::id()));
						$notification->user_involved = json_encode($user_involved);
						$notification->type = $type;
						$notification->effected = $id;
						$notification->seen = 0;
						$notification->clicked = 0;
						$notification->save();
					}
				}
			}
		}
		?>
		@stop