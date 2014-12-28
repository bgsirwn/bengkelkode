<?php
if (Sistem::periksaSesi()) {
	header("Location: home");	
};
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bengkel Koding::Signup</title>
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
			<div id="signup-section">
				<form id="signup-form" onsubmit="return signup()">
					<input name="name" type="text" placeholder="full name" required>
					<input name="email" type="text" placeholder="example@domain.com" required>
					<input name="username" id="username" type="text" placeholder="username" required>
					<input name="password" id="password" type="password" placeholder="password" required>
					<input type="submit" value="Sign me up">
				</form>
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>