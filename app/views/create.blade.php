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

			<!--

				{{Form::open()}}
				{{Form::text('title','',array('placeholder'=>'Title','class'=>'form-control','style'=>'width:200px;display:inline-block;margin-bottom:20px','required'))}}
				{{Form::select('type', array('1'=>'Question', '2'=>'Discussion'))}}
				{{Form::textarea('thread','')}}
				<script>
					CKEDITOR.replace( 'thread', {
					    language: 'id',
					    uiColor: 'whitesmoke'
					});
				</script>
				{{Form::select('tag', array('1'=>'java','2'=>'php','3'=>'javascript'))}}
				<br>
				{{View::make('recaptcha::display')}}
				<br>
				<br>
				{{Form::submit('submit', array('class'=>'btn btn-primary'))}}
				{{Form::close()}}
-->
			</div>
		</div>
	</div>
</div>

	
@stop