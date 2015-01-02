@extends('dashboard')
@section('title')
	{{"Bengkel Koding::discover"}}
@stop
@section('content-inner')
	{{HTML::script('dist/js/ckeditor/ckeditor.js')}}
	@foreach($output as $key)
	<div class="row">
		<div class="col-sm-2">
			<a href="{{route('profile', array(User::find($key->user_id)->username))}}">{{User::find($key->user_id)->name}}</a>
		</div>
		<div class="col-sm-10">
			<h3><a href="{{route('thread.detail',array(User::find($key->user_id)->username,$key->id))}}">{{$key->title}}</a></h3>
			<p>{{htmlspecialchars_decode($key->thread)}}</p>

			@if(Route::currentRouteName()=='thread.detail')
			<hr>
			<div>
				<h3>Answers</h3>
				<div class="row">
				<?php
				foreach($answer as $as){ ?>
					<div class="col-md-2">
						<a href="{{route('profile', array(User::find($as->user_id)->username))}}">{{User::find($as->user_id)->name}}</a>
					</div>
					<div class="col-md-10">
						{{htmlspecialchars_decode($as->answer)}}
					</div>
				<?php }?>
				</div>
			</div>
			@if(Auth::check())
			<div>
				<h3>Beri solusi!</h3>
				{{Form::open()}}
				{{Form::textarea('answer','')}}
				{{Form::submit('Post', array('class'=>'btn btn-default btn-lg'))}}
				{{Form::close()}}
				<script>
					CKEDITOR.replace( 'answer', {
					    language: 'id',
					    uiColor: 'whitesmoke'
					});
				</script>
			</div>
			@endif
			@endif
		</div>
	</div>
	@endforeach
@stop