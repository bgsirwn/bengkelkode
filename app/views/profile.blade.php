@extends('default')
@section('title')
	{{"Bengkel Koding::discover"}}
@stop
@section('content')
<div class="container">
<div class="grid">
	<div class="row">
		<div class="span5">
			
		</div>
		<div class="span4">
			<img src="{{URL::asset('dist/images/'.$output->photo)}}" class="cycle span2" / style="valign:top">
			
				
		</div>
		<div class="span5"></div>
			
		</div>
	</div>

	<div class="grid">
		<div class="row">
			<div class="span12" style="text-align:center">
			<h2>{{$output->name}}</h2>
			<a href="{{route('profile',array($output->username))}}"><strong>{{"@".$output->username}}</strong></a>
			<a href="" class="info"><strong>{{count($followers)}} followers</strong></a>
			<button class="primary"><strong>{{$output->point}} Point</strong></button>
			<br><a href="{{route('{username}.thread.index', array($output->username))}}" role="button" class="button primary large" style="margin-top:40px">Thread</a>
			@if($followed)
				<a href="{{route('unfollow',[$user->username,'redirect'=>convert_uuencode(Request::url())])}}" role="button" class="button primary large" style="margin-top:40px">Unfollow</a>
			@else
				@if($showButton)
				<a href="{{route('follow',[$user->username,'redirect'=>convert_uuencode(Request::url())])}}" role="button" class="button primary large" style="margin-top:40px">Follow</a>
				@endif
			@endif
			</div>
		</div>

		
	
		
	</div>

</div>

	<div class="content" style="background-color: #7E7EFF; height:200px">
	@if(Route::currentRouteName()=="profile")
		<div class="container">
			<div class="grid">
				<div class="row">
					<div class="span12">
						<h2><Strong style="color:white">Skill</Strong></h2>
						<p class="divider">
						
						HTML dan CSS
						<div class="progress-bar large" data-role="progress-bar" data-value="20"></div>
						PHP
						<div class="progress-bar large" data-role="progress-bar" data-value="40"></div>

							

					</div>
					
				</div>
			</div>
	@else
	<div>
		@foreach($followers as $follower)
		<div class="avatar" style="width:50px">
			<img src="{{URL::asset('dist/images/'.$follower->photo)}}">
		</div>
		<p>{{'@'.$follower->username}}</p>
		<p>{{$follower->name}}</p>
		@endforeach
	</div>
	@endif
		</div>
	</div>

</div>
@stop