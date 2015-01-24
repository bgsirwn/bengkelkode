@extends('default')
@section('title')
	{{"Bengkel Koding::Sign up"}}
@stop
@section('content')
	
	<div class="container">
		<div class="grid">
			<div class="row">

				<div class="span4">
					
				</div>

				<div class="span6" style="margin-top: 100px; margin-bottom:100px">
					<div style="background-color:#E03131; padding:30px; width:80%">
						<h2>
							<span class="icon-user" style="margin-right:5px; margin-left:10px"></span>
							Sign Up
						</h2>

						{{Form::open(array('class'=>'form-horizontal'))}}
							<div class="form-group input-control text" data-role="input-control" style="margin:5px">
								<!--{{Form::label('name','Name')}}-->
								{{Form::text('name','',array('class'=>'form-control','placeholder'=>'name','required'))}}
								<button type="button" class="btn-clear" tabindex="-1"></button>	
							</div>

							<div class="form-group input-control text" data-role="input-control" style="margin:5px">
								<!--{{Form::label('username','Username')}}-->
								{{Form::text('username','',array('class'=>'form-control', 'placeholder'=>'username','required'))}}
								<button type="button" class="btn-clear" tabindex="-1"></button>
							</div>

							<div class="form-group input-control text" data-role="input-control" style="margin:5px">
								<!--{{Form::label('email','Email')}}-->
								{{Form::email('email','',array('placeholder'=>'email', 'class'=>'form-control','required'))}}
								<button type="button" class="btn-clear" tabindex="-1"></button>
							</div>

							<div class="form-group input-control password" data-role="input-control" style="margin:5px">
								<!--{{Form::label('password','Password')}}-->
								{{Form::password('password',array('placeholder'=>'password', 'class'=>'form-control','required'))}}
								<button type="button" class="btn-reveal" tabindex="-1"></button>
							</div>

							{{View::make('recaptcha::display', array('style'=>'margin:20px'))}}
							<div class="form-group">
							{{Form::submit('Sign up', array('class'=>'primary','style'=>'margin:5px'))}}
							</div>
						{{Form::close()}}
					</div>

					<div>
						
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--
	<div class="container">
		<div class="grid">
			<div class="row">

				<div class="span4">
					
				</div>

				<div class="span6">
					<div style="background-color:#E03131">
						
						{{Form::open(array('class'=>'form-horizontal','style'=>'width:200px;margin:auto'))}}
							<div class="form-group">
							{{Form::label('name','Name')}}
							{{Form::text('name','',array('class'=>'form-control','placeholder'=>'name','required'))}}
							</div>
							<div class="form-group">
							{{Form::label('username','Username')}}
							{{Form::text('username','',array('class'=>'form-control', 'placeholder'=>'username','required'))}}
							</div>
							<div class="form-group">
							{{Form::label('email','Email')}}
							{{Form::email('email','',array('placeholder'=>'email', 'class'=>'form-control','required'))}}
							</div>
							<div class="form-group">
							{{Form::label('password','Password')}}
							{{Form::password('password',array('placeholder'=>'password', 'class'=>'form-control','required'))}}
							</div>
							{{View::make('recaptcha::display')}}
							<div class="form-group">
							{{Form::submit('Sign up', array('class'=>'btn btn-default'))}}
							</div>
						{{Form::close()}}
					</div>

					<div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
-->
	
@stop