<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	{{HTML::style('dist/css/metro-bootstrap.css')}}
	{{HTML::style('dist/css/metro-bootstrap-responsive.css')}}
	{{HTML::style('dist/css/iconFont.css')}}
	{{HTML::style('dist/css/docs.css')}}
	{{HTML::style('dist/js/prettify/prettify.css')}}

	<!--Load JavaScript Libraries-->
	{{HTML::script('dist/js/jquery/jquery.min.js')}}
	{{HTML::script('dist/js/jquery/jquery.widget.min.js')}}
	{{HTML::script('dist/js/jquery/jquery.mousewheel.js')}}
	{{HTML::script('dist/js/prettify/prettify.js')}}

	<!--Metro UI CSS JavaScript plugins-->
	{{HTML::script('dist/js/load-metro.js')}}

	<!--Local javascript-->
	{{HTML::script('dist/js/docs.js')}}
	 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   	 <![endif]-->


	<title>@yield('title')</title>

	
	
    
</head>
<body class="metro">
	
		<div class="navigation-bar dark">
    		<div class="navigation-bar-content container">
        		<a href="/" class="element"><span class="icon-console"></span> BengkelKoding <sup> v. 1.0</sup></a>
        		<span class="element-divider"></span>
        		<a class="element1 pull-menu" href="#"></a>	
        		<ul class="element-menu">

        			



        		<li>
        			<a href="{{route('create')}}">Ask Something</a>
            	</li>
            	<li> <a href="{{route('discover')}}">Discover</a></li>
                
                </ul>
                
    

        <div class="no-tablet-portrait no-phone">

        		
        		<ul class="element-menu place-right" style="margin-right: 140px">
					@if(Auth::check())
<<<<<<< HEAD
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
=======
        			<li>
        			
                <a class="dropdown-toggle" href="#">{{Auth::user()->name}}</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><a href={{route('profile', array(Auth::user()->username))}}">Profile</a></li>
                    <li><a href="responsive.html">Setting</a></li>
                    <li class="divider"></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                </ul>

            </li>
            </ul>

            	@else
            	<li><a href="{{route('signup')}}">sign up</a></li>
>>>>>>> e3fff14a05abc1f3aecbee969b793ce9c7aec408
						<li><a href="{{route('login')}}">login</a></li>
					</ul>
				@endif
            </ul>


           
        </div>
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
	
	{{HTML::script('dist/js/bootstrap.min.js')}}


</body>
</html>