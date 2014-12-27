<?php
class SignupController{
	function show(){
		Tampilan::show('signup');
	}

	function signMeUp(){
		$sistemUtama = new Sistem();
		if (isset($_POST)) {
			$email = $_POST['email'];
			$password = md5($_POST['password']);
			$username = $_POST['username'];
			$name = $_POST['name'];
			$sistemUtama->signup($email,$password,$username,$name);
		}
	}
}
?>