<?

class Sistem extends KoneksiDatabase
{
	var $isUnderMaintenance = 0;
	var $lokasi;
	var $urls;

	function __construct(){
		$this->ulrs = array('id','aa');
	}

	function getUserLoggedIn(){
		if (isset($_SESSION['user_id'])) {
			return $_SESSION['user_id'];
		}
		elseif (isset($_COOKIE['user_id'])) {
			return $_COOKIE['user_id'];
		}
	}

	function getWaktu(){
		$tahun = date("Y");
		$bulan = date("m");
		$hari = date("d");
		$jam = date("H");
		$menit = date("i");
		$detik = date("s");
		return	$waktu = $tahun."-".$bulan."-".$hari." ".$jam.":".$menit.":".$detik;
	}

	function getLokasi(){
		return $this->lokasi;
	}

	function periksaSesi(){
		if (isset($_SESSION['user_id'])||isset($_COOKIE['user_id'])) {
			return true;
		}
		else{
			return false;
		}
	}

	function mulai($page){
		$this->lokasi = $page;
		if (!$this->isUnderMaintenance) {
			if ($this->periksaSesi()) {
				if ($this->getLokasi()=="login"||$this->getLokasi()=="maintenance_report") {
					header("Location: home");
				}
			}
			else{
				if($this->getLokasi()!="login"){
					header("Location: login");
				}
			}
		}
		else{
			if($this->getLokasi()!="maintenance_report"){
				header("Location: maintenance_report");	
			}
		}
	}

	function login($username, $password){
		$data_user = new UserTable();
		$row = $data_user->getByUsernameAndPassword($username,$password);
		if(($row['username']==$username||$row['email']==$username)&&$row['password']==$password){
			$_SESSION['user_id'] = $row['id'];
			echo "true";
		}
		else{
			echo $password;
			echo $row['password'];
			// echo "false ".$row['username']." ".$row['email']." ".$row['password'];
		}
	}

	function signup($email,$password,$username,$name){
		$user = new UserTable();
		$photo = "null";
		$user->prepareData($email,$password,$username,$name,$photo);
		$user->saveRow();
		echo "true";
	}

	function logout(){
		if (isset($_SESSION['user_id'])) {
			unset($_SESSION['user_id']);
		}
		elseif (isset($_COOKIE['user_id'])) {
			setcookie('user_id','',time()-3600);
		}
		header("Location: home");
	}

	function isAjax(){
		return $isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
	}

	function addRouting(&$routers, $url, $call){
		$routers[(count($routers))] = array('id' => $url, 'call' => $call);
	}

	function routing($routers, $url){
		$found = false;
		for ($i=0; $i < count($routers); $i++) { 
			if ($routers[$i]['id']==$url) {
				if (is_string($routers[$i]['call'])) {
					$data = explode("@", $routers[$i]['call']);
					call_user_func(array($data[0],$data[1]));
				}
				else{
					$routers[$i]['call']();
				}
				$found = true;
			}
		}
		if(!$found){
			call_user_func(array('GlobalController','err'));
		}
	}
}
?>