	<div class="navigation-bar dark fixed-top shadow" style="background-color: rgb(10, 105, 143);">
   		<div class="navigation-bar-content container">
       		<a href="{{URL::to('/')}}" class="element"><span class="icon-console"></span> BengkelKoding <sup> v. 1.0</sup></a>
       		<span class="element-divider"></span>
       		<a class="element1 pull-menu" href="#"></a>	
       		<ul class="element-menu">
       			<li><a href="{{route('create')}}">Ask Something</a></li>
       			<li><a href="{{route('discover')}}">Discover</a></li>
       		</ul>
			@if($errors->any())
			<script>
				$(function(){
					$.Notify({
                    shadow: true,
                    position: 'bottom-right',
                    content: "{{$errors->first()}}"
                    });
                });
			</script>
			@endif
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
							{{Form::open(array('class'=>'form-horizontal','url'=>route('login', array('redirect'=>convert_uuencode(Request::url())))))}}	
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
				</ul>
				@endif
       		</div>
    	</div>
    </div>
