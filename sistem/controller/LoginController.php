<?php
class LoginController{

	function hello(){
		$va = htmlentities("<p>Namaku <span style='color:red'>Huda</span></p>");
		echo $va."<br>";
		echo htmlspecialchars_decode($va);
	}

	function show(){
		Tampilan::show('login');
	}

	function auth(){
		Sistem::login(strtolower($_POST['username']),md5($_POST['password']));
	}
	
}
?>