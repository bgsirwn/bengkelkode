
<html>
<head>
	<title></title>
</head>
<body>
	<p>Email anda sudah dikonfirmasi</p>
	<h1>Step 1</h1>
	<h2>Profile</h2>
	{{Form::open(array('files'=>true))}}
	{{Form::text('bio','',array('placeholder'=>'bio'))}}
	{{Form::file('photo')}}
	{{Form::submit('Update')}}
	{{Form::close()}}

	<!-- Tombol ini memerlukan request POST jadi harus
	pake form -->
	<form id="skip" method="post" action="{{route('registration.skip')}}">
		<input type="submit" name="action" value="skip">
	</form>
</body>
</html>