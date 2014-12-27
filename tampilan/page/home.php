<!DOCTYPE html>
<html>
<head>
	<title>Bengkel Coding</title>
</head>
<body>
	<div id="kontainer">
		<div id="header">
			<h1>Bengkel Coding</h1>
		</div>
		<div id="konten-outer">
			<div id="konten">
				<?php 
				if(Sistem::periksaSesi())
					include 'tampilan/page/menu.php'; 
				else{?>
				<p>Selamat datang di bengkel koding.</p>
				<p>Anda bisa <a href="login">login</a> atau <a href="signup">sign up</a></p>
				<?php	
				}
				?>
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>