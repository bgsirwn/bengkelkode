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
	 <script>
	 var alamat = "{{URL::to('/')}}";
	 </script>
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
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushAppleScript.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushAS3.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushBash.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushColdFusionjs')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushCpp.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushCSharp.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushCss.js')}} 	
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushJava.js')}}
   	 {{HTML::script('https://www.google.com/recaptcha/api.js')}}
   	 {{HTML::style('dist/js/ckeditor/plugins/syntaxhighlight/styles/shCoreDefault.css')}}
   	 
	 <script type="text/javascript">SyntaxHighlighter.all();</script>


	<title>@yield('title')</title>
    
</head>
<body class="metro" style="margin-top: 70px; background-color: rgb(81, 81, 81);">
	<div class="navigation-bar dark fixed-top shadow" style="background-color: rgb(10, 105, 143);">
   		<div class="navigation-bar-content container">
       		<a href="{{URL::to('/')}}" class="element"><span class="icon-console"></span> BengkelKoding <sup> v. 1.0</sup></a>
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
					<script type="text/javascript">
						function getnotif(){
							$.ajax({
						    	type: "POST",
						      	url: {{Session::get('unseen_notif')}},
						      	dataType:'json',
						      	success: function(response){
						       	$("#jumlah").text(""+response+"");
						       	timer = setTimeout("getnotif()",5000);
						      	}
						    });
						}
						   	$(document).ready(function(){
						   		getnotif();
						   	});
						     </script> 
					

						<a class="dropdown-toggle" href="#">Notifications <span style="color:red;display:inline-block;border-radius:50%"><div id="jumlah">{{Session::get('unseen_notif')}}</div></span></a>
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
					<!--<li><a href="{{route('login')}}">login</a></li>-->
					
					<div id="Login-Container" class="element">
						
						<a id="toggle-login" href="#" style="color:white">Login</a>

						<script type="text/javascript">
							$('#toggle-login').click(function(){
							  $('#log-form').toggle();
							});
						
						</script>	


						<div style="clear:both"></div>
						
						<div style="margin-top: 15px; position: absolute; display: none; background-color:#333; padding:30px; width:250px" id="log-form">
							
							<h2 style="margin-bottom:20px; color:white">Sign in</h2>

						
						{{Form::open(array('class'=>'form-horizontal','url'=>route('login', array('redirect'=>convert_uuencode(Route::currentRouteName())))))}}	
							<div class="form-group input-control text" data-role="input-control" style="margin:5px">
							<!--{{Form::label('username')}}-->
							{{Form::text('username','',array('class'=>'form-control','placeholder'=>'username','required', 'type'=>'text', 'style'=>'font-size:14px'))}}
							<button type="button" class="btn-clear" tabindex="-1"></button>
							
							</div>

							<div class="form-group input-control password" data-role="input-control" style="margin:5px">
							<!--{{Form::label('password')}}-->
							{{Form::password('password',array('class'=>'form-control','placeholder'=>'Password', 'required','type'=>'password'))}}
							<button type="button" class="btn-reveal" tabindex="-1"></button>
							
							</div>
							
							<div class="form-group">
							{{Form::submit('Login', array('class'=>'primary'))}}
							</div>
						{{Form::close()}}

						@if($errors->any())
						<div class="alert" style="margin-bottom:5px">
							<a class="close" dismiss="alert">x</a>
							<strong>{{$errors->first()}}</strong>
						</div>
						@endif
<!--
							<form>
								
								<div class="input-control text" data-role="input-control" style="margin:5px">
                                            <input placeholder="Username" type="text" style="font-size:14px">
                                            <button type="button" class="btn-clear" tabindex="-1"></button>
                                </div>

								<div class="input-control password" data-role="input-control" style="margin:5px">
                                	        <input placeholder="Password" autofocus="" type="password">
                                            <button type="button" class="btn-reveal" tabindex="-1"></button>
                                </div>

                                {{Form::submit('Login', array('class'=>'btn btn-default', 'style'=>'margin:5px'))}}
								
							   
  
							</p></form>
							-->
						</div>
					</div>
					
					

					</li>
					
				</ul>
				
					
				@endif
            </ul>
        </div>
    </div>
    </div>

    
	
	<div id="content">
		@yield('content')
	</div>
	@yield('outer')
	
<div class="content">
	<div class="container">
		<div class="grid">
			<div class="span12">
	            <div class="bottom-menu-wrapper">
	                <ul class="horizontal-menu compact">
	                    <li>Copyright © 2015 BengkelKoding.com</li>
	                    <li><a href="#">Privacy</a></li>
	                    <li><a href="#">Legal</a></li>
	                    <li><a href="#">Advertise</a></li>
	                    <li><a href="#">Help</a></li>
	                    <li><a href="#">Feedback</a></li>
	                </ul>
	            </div>
			</div>
		</div>
	</div>
	
</div>
</body>
</html>