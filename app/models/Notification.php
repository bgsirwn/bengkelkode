<?php

class Notification extends Eloquent{
	
	function store($id, $type){
		if ($type=1) {
			$answer = new Answer;
			$data = $answer->getUserInvolvedOnThread($id);
			for ($i=0; $i < count($data); $i++) { 
				if ($data[$i]!=Auth::id()) {
					$ans = new Notification;
					$ans->user_id = $data[$i];
					$ans->user_sender = Auth::id();
					$ans->type = $type;
					$ans->effected = $id;
					$ans->seen = 0;
					$ans->clicked = 0;
					$ans->save();
				}
			}
		}
	}
}