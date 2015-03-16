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

	<!--Load Js-->
	{{HTML::script('js/jquery-1.10.1.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	{{HTML::script('js/html5shiv.js')}}
	{{HTML::script('js/respond.min.js')}}
	{{HTML::script('js/site.min.js')}}
	
	 <script>
	 var alamat = "{{URL::to('/')}}";
	 </script>
	

	<title>@yield('title')</title>
    
</head>
<body style = "background-color: #ABB7B7">
	
	@include('navbar')
    <div style="padding-top: 70px"></div>
	@yield('content')
	
	@include('footer')
</body>
</html>