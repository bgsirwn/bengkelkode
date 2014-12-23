<?php include '../class_lib.php';
$sistemUtama = new Sistem();
$pemasukan = new PemasukanTable();
$query = $pemasukan->getByUserId($sistemUtama->getUserLoggedIn());
?>
<table border="0">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Deskripsi</th>
		<th>Jumlah</th>
		<th>Tanggal</th>
	</tr>
<?
$i = 1;
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	if ($row['month']==date('m')) {
		$user = new UserTable();
		$user->getById($row['user_id']);
		?>
		<tr>
			<td><? echo $i;?></td>
			<td><?echo $row['name'];?></td>
			<td><?echo $row['description'];?></td>
			<td><?echo 'Rp. '.$row['amount'];?></td>
			<td><?echo date('d-M-y',strtotime($row['date']));?></td>
		</tr>
		<?
		$i++;
	}
}
?>
</table>