<?php
class ThreadTable extends KoneksiDatabase{
	var $id;
	var $user_id;
	var $title;
	var $thread;
	var $tag;
	var $created_date;
	var $modified_date;

	function prepareData($user_id,$title,$thread,$tag){
		$this->setUserId($user_id);
		$this->setTitle($title);
		$this->setThread($thread);
		$this->setTag($tag);
	}

	function save(){
		$koneksi = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->usr,$this->pass);
		$query = $koneksi->prepare("INSERT INTO thread (id, user_id, title, thread, tag, created_date, modified_date) VALUES(null, :user_id, :title, :thread, :tag, :created_date, :modified_date)");
		$query->bindValue(':user_id', $this->getUserId());
		$query->bindValue(':title', $this->getTitle());
		$query->bindValue(':thread', $this->getThread());
		$query->bindValue(':tag', $this->getTag());
		$query->bindValue(':created_date', Sistem::getWaktu());
		$query->bindValue(':modified_date', Sistem::getWaktu());
		$query->execute();
	}

	function setId($id){
		$this->id = $id;
	}

	function setUserId($user_id){
		$this->user_id = $user_id;
	}

	function setTitle($title){
		$this->title = $title;
	}

	function setThread($thread){
		$this->thread = $thread;
	}

	function setTag($tag){
		$this->tag = $tag;
	}

	function setCreatedDate($date){
		$this->created_date = $date;
	}

	function setModifiedDate($date){
		$this->modified_date = $date;
	}

	function getId(){
		return $this->id;
	}

	function getUserId(){
		return $this->user_id;
	}

	function getTitle(){
		return $this->title;
	}

	function getThread(){
		return $this->thread;
	}

	function getTag(){
		return $this->tag;
	}

	function getCreatedDate(){
		return $this->created_date;
	}

	function getModifiedDate(){
		return $this->modified_date;
	}
}
?>