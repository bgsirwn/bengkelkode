<?
class UserTable extends KoneksiDatabase{
	var $id;
	var $email;
	var $password;
	var $usernae;
	var $name;
	var $photo;
	var $join_date;

	function getById($id){
		$koneksi = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->usr,$this->pass);
		$query = $koneksi->prepare("SELECT * FROM user WHERE id=:id");
		$query->bindValue(':id',$id);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_ASSOC);
		$this->prepareData($result['email'],$result['password'],$result['username'],$result['name'],$result['photo']);
		return $result;
	}

	function getByUsernameAndPassword($username,$password){
		$koneksi = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->usr,$this->pass);
		$query = $koneksi->prepare("SELECT * FROM user WHERE (username=:username OR email=:username) AND password=:password");
		$query->bindValue(':username',$username);
		$query->bindValue(':password',$password);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	function setEmail($email){
		$this->email = $email;
	}

	function setPassword($password){
		$this->password = $password;
	}

	function setUsername($username){
		$this->username = $username;
	}

	function setName($name){
		$this->name = $name;
	}

	function setPhoto($photo){
		$this->photo = $photo;
	}

	function getEmail(){
		return $this->email;
	}

	function getPassword(){
		return $this->password;
	}

	function getUsername(){
		return $this->username;
	}

	function getName(){
		return $this->name;
	}

	function getPhoto(){
		return "media/photos/".$this->photo;
	}

	function prepareData($email,$password,$username,$name,$photo){
		$this->setEmail($email);
		$this->setPassword($password);
		$this->setUsername($username);
		$this->setName($name);
		$this->setPhoto($photo);
	}

	function saveRow(){
		$koneksi = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->usr,$this->pass);
		$query = $koneksi->prepare("INSERT INTO user (id,email,password,username,name,photo,join_date) VALUES (null,:email,:password,:username,:name,:photo,:join_date)");
		$query->bindValue(':email',$this->getEmail());
		$query->bindValue(':password',$this->getPassword());
		$query->bindValue(':username',$this->getUsername());
		$query->bindValue(':name',$this->getName());
		$query->bindValue(':photo',$this->getPhoto());
		$query->bindValue(':join_date',Sistem::getWaktu());
		$query->execute();
		return $koneksi->lastInsertId();
	}

	function updateRowById(){

	}
}
?>