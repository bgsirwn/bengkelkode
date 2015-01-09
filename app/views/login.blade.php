@extends('default')
@section('title')
	{{"Bengkel Koding::login"}}
@stop
@section('content')
	<h1><small>Login</small></h1>

	<div class="container">
			<div class="grid">
				<div class="row">
					<div class="span4">
						
					</div>

					<div class="span6" style="padding-top: 25px">

						@if($errors->any())
						<div class="alert" style="margin-bottom:5px">
							<a class="close" dismiss="alert">x</a>
							<strong>{{$errors->first()}}</strong>
						</div>
						@endif

						<div class="example">
							<!--<form>
							{{Form::open()}}
								<fieldset>
									<legend>
										Login
									</legend>
									<label>Username</label>
									<div class="input-control text" data-role="input-control">		
							{{Form::text('username','',array('class'=>'input-control', 'placeholder'=>'username','required'))}}
									</div>
									<label>Password</label>
									<div class="input-control password" data-role="input-control">
										
							{{Form::password('password',array('placeholder'=>'password','autofocus'=>'', 'class'=>'form-control','required'))}}
									</div>

									<div>
									{{Form::submit('Login')}}
									</div>
								</fieldset>
							</form>
							-->

							{{Form::open(array('class'=>'form-horizontal'))}}
		
		




		<fieldset>
			<legend>Login</legend>
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

		</fieldset>
		


						</div>
					</div>

					<div class="span4">
						
					</div>


				</div>
				
			</div>
		</div>
		{{Form::close()}}

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