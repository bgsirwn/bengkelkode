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
			<button class="success"><strong>{{"@".$output->username}}</strong></button>
			<button class="info"><strong>{{count($followers)}} followers</strong></button>
			<button class="primary"><strong>level 18</strong></button>
			<br><a href="{{route('thread.username', array($output->username))}}" role="button" class="button primary large" style="margin-top:40px">Thread</a>
			@if($followed)
				<a href="{{route('unfollow', array('username'=>$output->username))}}" role="button" class="button primary large" style="margin-top:40px">Unfollow</a>
			@else
				@if($showButton)
				<a href="{{route('follow', array('username'=>$output->username))}}" role="button" class="button primary large" style="margin-top:40px">Follow</a>
				@endif
			@endif
			</div>
		</div>

		
	
		
	</div>

</div>

	<div class="content" style="background-color: #7E7EFF; height:200px">
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
		</div>
	</div>

</div>
@stop