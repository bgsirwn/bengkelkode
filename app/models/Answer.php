<?php
class Answer extends Eloquent{
	function getUserInvolvedOnThread($thread_id){
		$data = $this->where('thread_id','=', $thread_id)->distinct()->lists('user_id');
		$found = false;
		for($i=0;$i<count($data);$i++){
			if ($data[$i]==Thread::find($thread_id)->id) {
				$found = true;
			}
		}
		if(!$found){
			$data[count($data)] = Thread::find($thread_id)->id;
		}
		return $data;
	}
}