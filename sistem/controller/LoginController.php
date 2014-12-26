<?php
class LoginController{

	function hello(){
		echo "hello";
	}

	function show(){
		Tampilan::show('login');
	}

	function auth(){
		Sistem::login(strtolower($_POST['username']),md5($_POST['password']));
	}
	
}
?>