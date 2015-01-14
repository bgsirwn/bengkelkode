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
	{{HTML::style('dist/css/custom.css')}}
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

   	 <!--syntaxhighligt-->
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shCore.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shLegacy.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushJava.js')}}
   	 {{HTML::style('dist/js/ckeditor/plugins/syntaxhighlight/styles/shCoreDefault.css')}}
   	 
	 <script type="text/javascript">SyntaxHighlighter.all();</script>



	<title>@yield('title')</title>
    
</head>
<body class="metro">
	<div class="navigation-bar dark">
   		<div class="navigation-bar-content container">
       		<a href="/" class="element"><span class="icon-console"></span> BengkelKoding <sup> v. 1.0</sup></a>
       		<span class="element-divider"></span>
       		<a class="element1 pull-menu" href="#"></a>	
       		<ul class="element-menu">
       			<li><a href="{{route('create')}}">Ask Something</a></li>
       			<li><a href="{{route('discover')}}">Discover</a></li>
       		</ul>
       		<div class="no-tablet-portrait no-phone">
        		<ul class="element-menu place-right" style="margin-right: 140px">
				@if(Auth::check())
					<li>
						<a class="dropdown-toggle" href="#">Notifications</a>
						<ul class="dropdown-menu dark" data-role="dropdown">
						@foreach(Session::get('notifications') as $notif)
							<li><a href="{{$notif->link}}">{{$notif->message}}</a></li>
						@endforeach
						</ul>
					</li>
					<li>
						<a class="dropdown-toggle" href="#">{{Auth::user()->name}}</a>
						<ul class="dropdown-menu" data-role="dropdown">
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
            </ul>
        </div>
    </div>
    </div>

    <div class="container">
    	<div class="grid">
    		<div class="row">
    			<div class="span6">
    				<div class="header">
	    				
	    					<img src="{{URL::asset('dist/images/logo.png')}}" style="float:left; margin-right:20px" class="span1">
	    				
	    				<h2 style="padding-top:10px"><a href="#">BengkelKoding.com</a></h2>
	    			</div>

    			</div>
    		</div>
    	</div>
    </div>
	
	<div id="content">
		@yield('content')
	</div>
	@yield('outer')
	
</body>
</html>