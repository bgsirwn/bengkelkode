<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@include('tampilan/load-asset')

		<title></title>

	</head>

	<body>
		@include('tampilan/navbar')
		@yield('content')
		@include('tampilan/footer')
	</body>
<html>