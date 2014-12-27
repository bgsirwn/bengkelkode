<?php
class Tampilan{
	function show($page){
		require 'tampilan/page/'.$page.'.php';
	}
}
?>