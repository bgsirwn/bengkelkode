<?php
class Answer extends Eloquent{
	function getUserInvolvedOnThread($thread_id){
		$data = $this->where('thread_id','=', $thread_id)->distinct()->lists('user_id');
		$found = false;
		for($i=0;$i<count($data);$i++){
			if ($data[$i]==Thread::find($thread_id)->user_id) {
				$found = true;
			}
		}
		if(!$found){
			$data[count($data)] = Thread::find($thread_id)->user_id;
		}
		$found = false;
		for($i=0;$i<count($data);$i++){
			if ($data[$i]==Auth::id()) {
				$found = true;
			}
		}
		if(!$found){
			$data[count($data)] = Auth::id();
		}
		return $data;
	}
}