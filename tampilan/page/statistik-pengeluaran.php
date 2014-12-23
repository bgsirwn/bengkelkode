<?if(!$sistemUtama->isAjax()){?>
<!DOCTYPE html>
<html>
<head>
	<title>#SahabatKantong | Statistik | Pengeluaran</title>
	<script src="tampilan/js/jquery-1.11.1.min.js"></script>
	<script src="tampilan/js/home.js"></script>
	<link rel="stylesheet" type="text/css" href="tampilan/style/home.css">
</head>
<body>
	<div id="kontainer">
		<? require 'tampilan/page/header.php';?>
		<div id="konten_outer">
			<? require 'tampilan/page/menu.php';?>
			<div id="konten">
				<?}?>
				<?if($sistemUtama->isAjax()||!$sistemUtama->isAjax()){?>
				Ini halaman statistik pengeluaran.
				<?require 'menu_waktu.php';?>
				<script>
					getData('statistik-pengeluaran');
				</script>
				<div id="konten_database"></div>
				<?}?>
				<?if(!$sistemUtama->isAjax()){?>
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>
<?}?>