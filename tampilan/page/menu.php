<div id="menu">
	<ul id="parent">
		<li><a id="new_button" href="javascript:void">+</a></li>
		<ul id="child_of_new">
			<li><a href="javascript:void" onclick="popup('new_pemasukan')">Pemasukan</a></li>
			<div id="new_pemasukan">
				<h2>Pemasukan</h2>
				<form onsubmit="return createNew('pemasukan')">
					<input name="name" type="text" placeholder="nama" required autocomplete="off" list="name-list">
					<datalist id="name-list">
						<option value="Bulanan">
						<option value="Buku">
						<option value="Kendaraan">
						<option value="Keperluan Kuliah">
						<option value="Keperluan Sekolah">
						<option value="Kesehatan">
						<option value="Makanan">
						<option value="Pulsa">
						<option value="Pakaian">
					</datalist>
					<textarea name="description" placeholder="deskripsi"></textarea>
					<input name="amount" type="text" placeholder="Rp. " required autocomplete="off">
					<input type="submit" value="tambah">
				</form>
			</div>
			<li><a href="javascript:void" onclick="popup('new_pengeluaran')">Pengeluaran</a></li>
			<div id="new_pengeluaran">
				<h2>Pengeluaran</h2>
				<form onsubmit="return createNew('pengeluaran')">
					<input name="name" type="text" placeholder="nama" required autocomplete="off" list="name-list">
					<textarea name="description" placeholder="deskripsi"></textarea>
					<input name="amount" type="text" placeholder="Rp. " required autocomplete="off">
					<input type="submit" value="tambah">
				</form>
			</div>
		</ul>
		<li><a href="javascript:void" onclick="changePage('home', '#SahabatKantong | Home')">Beranda</a></li>
		<li><a id="statistik_button" href="javascript:void">Statistik</a></li>
		<ul id="child_of_statistik">
			<li><a href="javascript:void" onclick="changePage('statistik-ikhtisar', '#SahabatKantong | Statistik | Ikhtisar')">Ikhtisar</a></li>
			<li><a href="javascript:void" onclick="changePage('statistik-pemasukan', '#SahabatKantong | Statistik | Pemasukan')">Pemasukan</a></li>
			<li><a href="javascript:void" onclick="changePage('statistik-pengeluaran', '#SahabatKantong | Statistik | Pengeluaran')">Pengeluaran</a></li>
			<li><a href="javascript:void" onclick="changePage('statistik-totaluang', '#SahabatKantong | Statistik | Total Uang')">Total Uang.</a></li>
		</ul>
		<li><a href="javascript:void" onclick="changePage('pengaturan','#SahabatKantong | Pengaturan')">Pengaturan</a></li>
		<li><a href="?page=logout">Keluar</a></li>
	</ul>
</div>
<div id="selambu"></div>