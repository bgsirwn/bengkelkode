@extends('default')
@section('title')
	{{"Bengkel Koding::reset password"}}
@stop
@section('content')
	{{Session::get('status')}}
	{{Session::get('error')}}
	<form action="password/reset" method="POST">
	    <input type="email" name="email">
	    <input type="submit" value="Send Reminder">
	</form>
@stop