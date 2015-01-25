@extends('default')
@section('title')
	{{"Bengkel Koding::Ask"}}
@stop
{{HTML::script('dist/js/ckeditor/ckeditor.js')}}
@section('content')

<div class="container">
	<div class="grid">
		<div class="row" style="background-color: rgba(193, 189, 194, 0.28); border: 1px solid">
			<p style="background-color: rgba(179, 179, 185, 0.53); height:30px; margin-bottom:50px"><b style="margin-left:30px">Edit Thread</b>
			@if(Auth::id()==$output->user_id)
			<div class="span2" style="text-align: right">
				<strong>Judul :</strong>
				<br>
				<br>
				<p><strong>Body : </strong>
			</div>
			<div class="span8">

				{{Form::open(array('method'=>'put'))}}
				{{Form::text('title',$output->title,array('placeholder'=>'Title','class'=>'form-control','style'=>'width:200px;display:inline-block;margin-bottom:20px','required'))}}
				{{Form::select('type', array('1'=>'Question', '2'=>'Discussion'),$output->type)}}
				{{Form::textarea('thread',htmlspecialchars_decode($output->thread))}}
				<script>
					CKEDITOR.replace( 'thread', {
					    language: 'id',
					    uiColor: 'whitesmoke'
					});
				</script>
				{{Form::select('tag', array('1'=>'java','2'=>'php','3'=>'javascript'), $output->tag)}}
				<br>
				{{View::make('recaptcha::display')}}
				<br>
				<br>
				{{Form::submit('submit', array('class'=>'btn btn-primary'))}}
				{{Form::close()}}
			</div>
			@else
			<p>This thread doesn't belong to you!</p>
			@endif
		</div>
	</div>
</div>

	
@stop