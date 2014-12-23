<?php include '../class_lib.php';
$sistemUtama = new Sistem();
if (isset($_POST)) {
	$sistemUtama->login(strtolower($_POST['username']),md5($_POST['password']));
}
?>