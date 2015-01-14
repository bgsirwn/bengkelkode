@extends('default')
@section('title')
	{{"Bengkel Koding"}}
@stop
@section('content')
	<div id="content-inner" style="margin-top:20px">
		@yield('content-inner')
		@section('dashboard-only')

			@foreach($output as $key)

			@endforeach()
		@stop
	</div>
@stop
