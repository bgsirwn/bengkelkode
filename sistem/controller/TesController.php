<?php
class TesController{
	function showAku(){
		echo "aku hudaa";
	}
	function contactKu(){
		Tampilan::show('contact');
	}
	function home(){
		Tampilan::show('home');
	}
	function err(){
		echo "Ups, the page you are looking for doesn't exist.";
	}
	function logout(){
		Sistem::logout();
	}
}
?>