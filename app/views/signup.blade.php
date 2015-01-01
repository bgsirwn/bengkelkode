@extends('default')
@section('title')
	{{"Bengkel Koding::Sign up"}}
@stop
@section('content')
	<h2>Sign up</h2>
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
		<div class="form-group">
		{{Form::submit('Sign up', array('class'=>'btn btn-default'))}}
		</div>
	{{Form::close()}}
@stop