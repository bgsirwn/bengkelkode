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

			@if(Route::currentRouteName()=='thread.detail'&&Auth::check())
			<div>
				{{Form::open()}}
				{{Form::textarea('reply','')}}
				{{Form::close()}}
				<script>
					CKEDITOR.replace( 'reply', {
					    language: 'id',
					    uiColor: 'whitesmoke'
					});
				</script>
			</div>
			@endif
		</div>
	</div>
	@endforeach
@stop