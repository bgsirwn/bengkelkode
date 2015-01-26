@extends('default')
@section('title')
	{{"Bengkel Koding::Ask"}}
@stop
{{HTML::script('dist/js/ckeditor/ckeditor.js')}}
@section('content')
{{Hash::make(Auth::user()->username).str_random(30)}}
@stop