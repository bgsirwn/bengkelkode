<? include '../class_lib.php';
$sistemUtama = new Sistem();
$pengeluaran = new PengeluaranTable();
$pemasukan = new PemasukanTable();
$total = 0;
$jumlahPengeluaran = 0;
$jumlahPemasukan = 0;
//baca total pengeluaran dalam bulan ini
$query = $pengeluaran->getByUserId($sistemUtama->getUserLoggedIn());
while($row = $query->fetch(PDO::FETCH_ASSOC)){
	if($row['month'] == date('m')){
		$jumlahPengeluaran+=$row['amount'];
	}
}
$query = $pemasukan->getByUserId($sistemUtama->getUserLoggedIn());
while($row = $query->fetch(PDO::FETCH_ASSOC)){
	if($row['month'] == date('m')){
		$jumlahPemasukan+=$row['amount'];
	}
}
$total = $jumlahPemasukan-$jumlahPengeluaran;
?>
<h3>Bulan ini</h3>
<p>Pemasukan Rp. <?echo $jumlahPemasukan;?></p>
<p>Pengeluaran Rp. <?echo $jumlahPengeluaran;?></p>
<p>Tersimpan Rp. <?echo $total;?></p>
