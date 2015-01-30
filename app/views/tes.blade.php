@extends('default')
@section('title')
	{{"Bengkel Koding::Setting"}}
@stop
@section('content')
<?php
	$notif = new NotificationController;
	$notif->store(1, 4);
		?>
		@stop