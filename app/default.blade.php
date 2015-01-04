<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	{{HTML::style('dist/css/bootstrap.min.css')}}
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    {{HTML::script('dist/js/jquery-1.11.1.min.js')}}
    {{HTML::script('dist/js/pace.min.js')}}
    {{HTML::style('dist/css/pace.flash.css')}}
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="/" class="navbar-brand">Bengkel Koding</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="{{route('create')}}">Ask something</a></li>
						<li><a href="{{route('discover')}}">Discover</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					@if(Auth::check())
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Notifications <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
							@foreach(Session::get('notifications') as $notif)
								<li><a href="{{$notif->link}}">{{$notif->message}}</a></li>
							@endforeach
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{route('profile', array(Auth::user()->username))}}">Profile</a></li>
								<li><a href="{{route('setting')}}">Setting</a></li>
								<li><a href="{{route('logout')}}">Logout</a></li>
							</ul>
						</li>
					@else
						<li><a href="{{route('signup')}}">sign up</a></li>
						<li><a href="{{route('login')}}">login</a></li>
					</ul>
					@endif
				</div>
			</div>
			<div id="header" class="page-header">
				<h1><a href="/">Bengkel Koding</a></h1>
			</div>
			<div id="content">
				@yield('content')
			</div>
		</div>
		@yield('outer')
	</div>
	{{HTML::script('dist/js/bootstrap.min.js')}}
</body>
</html>