<?
class PemasukanTable extends KoneksiDatabase{
	var $id;
	var $user_id;
	var $name;
	var $amount;
	var $description;
	var $date;

	function getById($id){
		$koneksi = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->usr,$this->pass);
		$query = $koneksi->prepare("SELECT id,user_id, name, amount, description, date,
		 EXTRACT(YEAR from date) as year,
		 EXTRACT(MONTH from date) as month,
		 EXTRACT(DAY from date) as day,
		 EXTRACT(HOUR from date) as hour,
		 EXTRACT(MINUTE from date) as minute,
		 EXTRACT(SECOND from date) as second
		 FROM pemasukan WHERE id=:id");
		$query->bindValue(':id', $id);
		$query->execute();
		return $query;
	}

	function getByUserId($user_id){
		$koneksi = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->usr,$this->pass);
		$query = $koneksi->prepare("SELECT id,user_id, name, amount, description, date,
		 EXTRACT(YEAR from date) as year,
		 EXTRACT(MONTH from date) as month,
		 EXTRACT(DAY from date) as day,
		 EXTRACT(HOUR from date) as hour,
		 EXTRACT(MINUTE from date) as minute,
		 EXTRACT(SECOND from date) as second
		 FROM pemasukan WHERE user_id=:user_id ORDER BY id DESC");
		$query->bindValue(':user_id', $user_id);
		$query->execute();
		return $query;
	}

	function getByDayOfTheMonth($dayOfTheMonth){

	}

	function getByMonthOfTheYear($montOfTheYear){

	}

	function getByYear($year){

	}

	function prepareData($user_id,$name,$amount,$description){
		$this->setUserId($user_id);
		$this->setName($name);
		$this->setAmount($amount);
		$this->setDescription($description);
	}

	function deleteRow($id){

	}

	function updateRow($id){
		$koneksi = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->usr,$this->pass);
		
	}

	function saveRow(){
		$koneksi = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->usr,$this->pass);
		$query = $koneksi->prepare("INSERT INTO pemasukan (id, user_id, name, amount, description, date) VALUES(null,:user_id,:name,:amount,:description,:date)");
		$query->bindValue(':user_id',$this->getUserId());
		$query->bindValue(':name',$this->getName());
		$query->bindValue(':amount',$this->getAmount());
		$query->bindValue(':description',$this->getDescription());
		$query->bindValue(':date',Sistem::getWaktu());
		$query->execute();
		return $koneksi->lastInsertId();
	}

	function setId($id){
		$this->id = $id;
	}

	function setUserId($user_id){
		$this->user_id = $user_id;
	}

	function setName($name){
		$this->name = $name;
	}

	function setAmount($amount){
		$this->amount = $amount;
	}

	function setDescription($description){
		$this->description = $description;
	}

	function setDate($date){
		$this->date = $date;
	}

	function getId(){
		return $this->id;
	}

	function getUserId(){
		return $this->user_id;
	}

	function getName(){
		return $this->name;
	}

	function getAmount(){
		return $this->amount;
	}

	function getDescription(){
		return $this->description;
	}

	function getDate(){
		return $this->date;
	}
}
?>