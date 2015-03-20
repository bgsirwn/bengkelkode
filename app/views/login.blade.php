@extends('default')
@section('title')
	{{"Bengkel Koding::login"}}
@stop
@section('content')
	<div class="container">
			
				<div class="row">
					<div class="col-md-4">
						
					</div>

					<div class="col-md-6" style="margin-top: 100px; margin-bottom: 100px;">

					


	<div style="background-color: rgb(92, 92, 231); padding: 30px; width: 80%;">

		<h2><span style="margin-right: 10px; margin-left: 5px;" class="icon-user"></span>Login</h2>
		{{Form::open(array('class'=>'form-horizontal', 'url'=>route('login.auth', array('redirect'=>Input::get('redirect')))))}}	
			<div class="form-group input-control text" data-role="input-control" style="margin:5px">
				
				{{Form::text('username',Input::old('username'),array('class'=>'form-control','placeholder'=>'username','required', 'type'=>'text', 'style'=>'font-size:16px'))}}
								
			</div>

			<div class="form-group input-control password" data-role="input-control" style="margin:5px">
				
				{{Form::password('password',array('class'=>'form-control','placeholder'=>'Password', 'required','type'=>'password'))}}
								
			</div>

			<div class="form-group">
				{{Form::label('forever', 'Remember me')}}
				{{Form::checkbox('forever')}}
			</div>
							
			<div class="form-group">
				{{Form::submit('Login', array('class'=>'btn btn-success' , 'style'=>'margin-left:20px'))}}
			</div>
		{{Form::close()}}
	</div>
						

					<div class="span4">
						
					</div>


				</div>
				
			</div>
		</div>
		{{Form::close(array('url'=>route('login', array('redirect'=>'convert_uuencode()'))))}}
		
<!--
	{{Form::open(array('class'=>'form-horizontal','style'=>'width:200px;margin:auto'))}}
		
		





		<div class="form-group">
		{{Form::label('username','Username')}}
		{{Form::text('username','',array('class'=>'form-control', 'placeholder'=>'username','required'))}}
		</div>
		<div class="form-group">
		{{Form::label('password','Password')}}
		{{Form::password('password',array('placeholder'=>'password', 'class'=>'form-control','required'))}}
		</div>
		<div class="form-group">
		{{Form::submit('Login', array('class'=>'btn btn-default'))}}
		</div>
	{{Form::close()}}
	-->

@stop