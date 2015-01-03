@extends('default')
@section('title')
	{{"Bengkel Koding"}}
@stop
@section('content')
	<pre>
	<?php 
	$answer = new Answer;
	var_dump($answer->getUserInvolvedOnThread(1)); 
	?>
@stop