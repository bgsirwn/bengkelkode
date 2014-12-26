<?php
class TesController{
	function showAku(){
		echo "aku hudaa";
	}
	function contactKu(){
		Tampilan::show('contact');
	}
	function home(){
		echo "Selamat datang di bengkel kode. Coba <a href='/login'>login</a> deh";
	}
}
?>