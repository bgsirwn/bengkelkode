@extends('default')
@section('title')
	{{"Bengkel Koding::Setting"}}
@stop
@section('content')
	{{Form::open(array('files'=>true))}}
	{{Form::text('name',$user->name, array('placeholder'=>'name'))}}
	{{Form::text('username',$user->username,array('placeholder'=>'username'))}}
	{{Form::text('bio',$user->bio,array('placeholder'=>'bio'))}}
	{{Form::file('photo')}}
	{{Form::submit('Update')}}
	{{Form::close()}}
	{{User::find(Auth::id())->photo}}
@stop