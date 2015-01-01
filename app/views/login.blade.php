@extends('default')
@section('title')
	{{"Bengkel Koding::login"}}
@stop
@section('content')
	<h1><small>Login</small></h1>
	{{Form::open(array('class'=>'form-horizontal','style'=>'width:200px;margin:auto'))}}
		
		@if($errors->any())
		<div class="row">
			<div class="span4">
				<div class="alert">
					<a class="close" dismiss="alert">x</a>
					<strong>{{$errors->first()}}</strong>
				</div>
			</div>
		</div>
		@endif
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
@stop