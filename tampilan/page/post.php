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
		<div id="header"></div>
		<div id="konten-outer">
			<?php
			if(isset($_POST['test'])){
				echo htmlentities($_POST['test']);
			}else{?>
			<form method="POST">
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