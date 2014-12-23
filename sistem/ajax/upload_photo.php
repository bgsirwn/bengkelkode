<?php /*include '../class_lib.php';
$sistemUtama = new Sistem();
$pengeluaran = new PengeluaranTable();*/
if (isset($_POST)) {
	$dir_upload = "../../media/";
	$nama_file = $_FILES['fileInput']['name'];
	//
	if (is_uploaded_file($_FILES['fileInput']['tmp_name'])) {
		$cek = move_uploaded_file ($_FILES['fileInput']['tmp_name'],
		$dir_upload.$nama_file);
		if ($cek) {
			echo $_POST['msg'];
		} else {
			die ("File gagal diupload");
		}
	}
}

?>