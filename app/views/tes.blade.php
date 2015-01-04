@extends('default')
@section('title')
	{{"Bengkel Koding"}}
@stop
@section('content')
	<br><br>
	<?php
	$notif = Session::get('notifications');
	foreach ($notif as $key) {
		echo $key->id."<br>";
	}
	?>
@stop