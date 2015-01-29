<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Email anda sudah dikonfirmasi</p>
	<h1>Step 2</h1>
	<h2>Privacy</h2>
	<form>
		
	</form>
	<!-- Tombol ini memerlukan request POST jadi harus
	pake form -->
	<form id="skip" method="post" action="{{route('registration.skip')}}">
		<input type="submit" name="action" value="skip">
	</form>
</body>
</html>