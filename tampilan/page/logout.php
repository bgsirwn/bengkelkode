<?php include '../class_lib.php';
$sistemUtama = new Sistem();
if (isset($_POST)) {
	$sistemUtama->logout();
}
?>