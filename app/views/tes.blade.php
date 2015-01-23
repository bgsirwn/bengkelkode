@extends('default')
@section('title')
	{{"Bengkel Koding::Ask"}}
@stop
{{HTML::script('dist/js/ckeditor/ckeditor.js')}}
@section('content')

<div class="container">
	<div class="grid">
		<div class="row" style="background-color: rgba(193, 189, 194, 0.28); border: 1px solid">
			<p style="background-color: rgba(179, 179, 185, 0.53); height:30px; margin-bottom:50px"><b style="margin-left:30px">Post New Thread</b>			<div class="span8">

				{{Form::open()}}
				{{Form::text('title','',array('placeholder'=>'Title','class'=>'form-control','style'=>'width:200px;display:inline-block;margin-bottom:20px','required'))}}
				{{Form::submit('submit', array('class'=>'btn btn-primary'))}}
				{{View::make('recaptcha::display')}}
				{{Form::close()}}
				{{Config::get('recaptcha::siteKey')}}
			</div>
		</div>
	</div>
</div>

	
@stop