<?php

class Notification extends Eloquent{
	
	function store($id, $type){
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
}