@extends('default')
@section('title')
	{{"Bengkel Koding::Ask"}}
@stop
{{HTML::script('dist/js/ckeditor/ckeditor.js')}}
@section('content')

<div class="container">
	<div class="grid">
		<div class="row">			
			<div class="span8">
				@include('post')
			</div>
		</div>
	</div>
</div>

	
@stop