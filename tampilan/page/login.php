<?php
if (Sistem::periksaSesi()) {
	header("Location: home");	
};
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bengkel Koding::Login</title>
	<script src="tampilan/js/jquery-1.11.1.min.js"></script>
	<script src="tampilan/js/loginPage.js"></script>
	<link rel="stylesheet" type="text/css" href="tampilan/style/login.css">
</head>
<body>
	<div id="kontainer">
		<div id="header">
			<?php require 'header.php';?>
		</div>
		<div id="konten-outer">
			<div id="login-section">
				<form id="login-form" onsubmit="return login()">
					<input name="username" type="text" placeholder="username or email" required>
					<input name="password" type="password" placeholder="password" required>
					<input type="submit" value="login">
				</form>
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>