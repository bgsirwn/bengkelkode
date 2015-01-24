@extends('default')
@section('title')
	{{"Bengkel Koding::Ask"}}
@stop
{{HTML::script('dist/js/ckeditor/ckeditor.js')}}
@section('content')

<?php
	if (Cache::has(Auth::user()->username."AddThreadView")) {
		echo Cache::get(Auth::user()->username.'AddThreadView');
	}

?>
	
@stop