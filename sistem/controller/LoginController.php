<?php
class LoginController{

	function hello(){
		echo "hello";
	}

	function showLogin(){
		Tampilan::show('login');
	}

	function auth(){
		Sistem::login(strtolower($_POST['username']),md5($_POST['password']));
	}
	
}
?>