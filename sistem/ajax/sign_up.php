<?php include '../class_lib.php';
$sistemUtama = new Sistem();
if (isset($_POST)) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$username = $_POST['username'];
	$name = $_POST['name'];
	$photo = $_POST['photo'];
	$sistemUtama->signup($email,$password,$username,$name,$photo);
}
?>