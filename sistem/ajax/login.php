<?php
	require '../../sistem/class_lib.php';
	Sistem::login(strtolower($_POST['username']),md5($_POST['password']));
?>