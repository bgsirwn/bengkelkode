@extends('dashboard')
@section('title')
	{{"Bengkel Koding::Ask"}}
@stop
{{HTML::script('dist/js/ckeditor/ckeditor.js')}}
@section('content-inner')
	{{Form::open()}}
		{{Form::text('title','',array('placeholder'=>'Title','class'=>'form-control','style'=>'width:200px;display:inline-block;margin-bottom:20px','required'))}}
		{{Form::submit('submit', array('class'=>'btn btn-primary'))}}
		{{Form::textarea('thread','')}}
		<script>
			CKEDITOR.replace( 'thread', {
			    language: 'id',
			    uiColor: 'whitesmoke'
			});
		</script>
	{{Form::close()}}
@stop