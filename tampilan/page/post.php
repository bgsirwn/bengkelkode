<?php
if (!Sistem::periksaSesi()) {
	header("Location: home");	
};
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bengkel Koding::Post</title>
	<script src="tampilan/js/jquery-1.11.1.min.js"></script>
	<script src="tampilan/plugin/ckeditor/ckeditor.js"></script>	
</head>
<body>
	<div id="kontainer">
		<div id="header">
			<?php require 'header.php';?>
		</div>
		<div id="konten-outer">
			<?php
			include 'tampilan/page/menu.php'; 
			if(isset($_POST['test'])){
				$s = htmlentities($_POST['test']);
				echo $s;
				echo "<br>".htmlspecialchars_decode($s);
				$thread = new ThreadTable();
				$thread->prepareData(Sistem::getUserLoggedIn(),$_POST['title'],$s,"php");
				$thread->save();
			}else{?>
			<form method="POST">
				<input id="title" name="title" type="text" placeholder="Title" required>
				<textarea id="test" name="test"></textarea>
				<input type="submit">
				<script>
					CKEDITOR.replace( 'test', {
					    language: 'id',
					    uiColor: 'whitesmoke'
					});
				</script>
			</form>
			<?php }?>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>