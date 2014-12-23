<?php include '../class_lib.php';
$sistemUtama = new Sistem();
$pengeluaran = new PengeluaranTable();
if (isset($_POST)) {
	$user_id = $sistemUtama->getUserLoggedIn();
	$name = $_POST['name'];
	$amount = $_POST['amount'];
	$description = $_POST['description'];
	$pengeluaran->prepareData($user_id,$name,$amount,$description);
	$new_row_id = $pengeluaran->saveRow();
	echo $new_row_id;
}
?>