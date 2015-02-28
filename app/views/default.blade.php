<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Load Bootstrap-->
	{{HTML::style('asset/css/bootstrap.min.css')}}
	
	<!--Load UI-->
	{{HTML::style('asset/css/site.min.css')}}

	 <script>
	 var alamat = "{{URL::to('/')}}";
	 </script>
	

	<title>@yield('title')</title>
    
</head>
<body>
	
	@include('navbar')
    
	@yield('content')
	
	@include('footer')
</body>
</html>