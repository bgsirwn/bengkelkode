@extends('dashboard')
@section('title')
	{{"Bengkel Koding::discover"}}
@stop
@section('content-inner')
	{{HTML::script('dist/js/ckeditor/ckeditor.js')}}
		
			@foreach($output as $key)
	
	<div class="container">

		<div class="grid" style="margin-bottom: 5px;">

		<div class="row" style="margin-top: 0px;">
		<div class="span8">

			<div>
				<div style="padding:10px; background:none repeat scroll 0% 0% #F5F5F5">
					<a href="{{route('thread.detail',array(User::find($key->user_id)->username,$key->id))}}" style="color: black; font-size: 16px;">{{$key->title}}</a>
					<p style="font-size: 12px"><i>posted by   </i><a href="{{route('profile', array(User::find($key->user_id)->username))}}">{{User::find($key->user_id)->name}}</a>
				</div>
			</div>
			
		</div>

		<div class="span4">
			
		</div>

		<!--
			<table class="table bordered">

				<thead>
					<tr class="warning">
						<th class="text-left">
							<strong><a href="{{route('thread.detail',array(User::find($key->user_id)->username,$key->id))}}" style="color:white" >{{$key->title}}</a></strong>
						</th>
						
					</tr>	
				</thead>

				<tbody>

					<td>
							<a href="{{route('profile', array(User::find($key->user_id)->username))}}">{{User::find($key->user_id)->name}}</a>
						</td>

					<tr>
						<td>
							<p>{{htmlspecialchars_decode($key->thread)}}</p>
						</td>
					</tr>
					
				</tbody>
			</table>
			-->
		</div>

			

			@if(Route::currentRouteName()=='thread.detail')
			<hr>
			<div>
				<h3>Answers</h3>
				<div class="row">
				<?php
				foreach($answer as $as){ ?>
					<div class="span2">
						<a href="{{route('profile', array(User::find($as->user_id)->username))}}">{{User::find($as->user_id)->name}}</a>
					</div>
					<div class="span10">
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
		</div>
	</div>
	
	@endforeach
@stop