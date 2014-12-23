<?if(!$sistemUtama->isAjax()){?>
<!DOCTYPE html>
<html>
<head>
	<title>#SahabatKantong | Pengaturan</title>
	<script src="tampilan/js/jquery-1.11.1.min.js"></script>
	<script src="tampilan/js/home.js"></script>
	<link rel="stylesheet" type="text/css" href="tampilan/style/home.css">
</head>
<body>
	<div id="kontainer">
		<? require 'tampilan/page/header.php';?>
		<div id="konten-outer">
			<? require 'tampilan/page/menu.php';?>
			<div id="konten">
				<?}?>
				<?if($sistemUtama->isAjax()||!$sistemUtama->isAjax()){?>
				Ini halaman pengaturan.
				Change Photo Profile.
				<form action="sistem/ajax/upload_photo.php" method="post" onsubmit="return upload()" id="upload_form" enctype="multipart/form-data">
					<input name="fileInput" id="fileInput" type="file">
					<input name="msg" type="text">
					<input type="submit" id="submit-btn" value="Upload">
				</form>
				<div id="progressBox"></div><div id="progressBar"></div><div id="statusTxt">0%</div>
				<div id="output"></div>
				<?}?>
				<?if(!$sistemUtama->isAjax()){?>
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>
<?}?>