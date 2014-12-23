<!DOCTYPE html>
<html>
<head>
	<title>#SahabatKantong</title>
	<script src="tampilan/js/jquery-1.11.1.min.js"></script>
	<script src="tampilan/js/loginPage.js"></script>
	<link rel="stylesheet" type="text/css" href="tampilan/style/login.css">
</head>
<body>
	<div id="kontainer">
		<div id="login_block">
			<form id="login_form" onsubmit="return login()">
				<input name="username" type="text" placeholder="username/email" required>
				<input name="password" type="password" placeholder="password" required>
				<input type="submit" value="Masuk">
			</form>
		</div>
			
		<form id="sign_up_form" onsubmit="return sign_up()">
			<input name="name" type="text" placeholder="Nama lengkap" required>
			<input id="username" name="username" type="text" placeholder="username" required>
			<input name="email" type="email" placeholder="email" required>
			<input id="password" name="password" type="password" placeholder="password" required>
			<input name="photo" type="text">
			<input type="submit" value="Daftar">
		</form>	
	</div>
	
</body>
</html>