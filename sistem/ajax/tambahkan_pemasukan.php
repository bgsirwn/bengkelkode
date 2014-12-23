<?php include '../class_lib.php';
$sistemUtama = new Sistem();
$pemasukan = new PemasukanTable();
if (isset($_POST)) {
	$user_id = $sistemUtama->getUserLoggedIn();
	$name = $_POST['name'];
	$amount = $_POST['amount'];
	$description = $_POST['description'];
	$pemasukan->prepareData($user_id,$name,$amount,$description);
	$new_row_id = $pemasukan->saveRow();
	echo $new_row_id;
}
?>