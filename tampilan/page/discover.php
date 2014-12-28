<!DOCTYPE html>
<html>
<head></head>
<body>
	<div id="kontainer">
		<div id="header">
			<?php require 'header.php';?>
		</div>
		<div id="konten-outer">
			<div id="konten">
				<?php
				require 'menu.php';
				echo $aku;
				?>
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>