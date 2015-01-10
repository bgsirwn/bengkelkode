@extends('dashboard')
@section('title')
	{{"Bengkel Koding::discover"}}
@stop
@section('outer')
	<div class="row">
		<div class="col-md-4 col-md-offset-4 jumbotron" style="text-align:center">
			<h2>{{$output->name}}</h2>
			<strong>{{"@".$output->username}}</strong>
			<div class="row">
				<div class="col-md-4 col-md-offset-2" style="text-align:right;">
					<strong>10k fllwrs</strong>
				</div>
				<div class="col-md-4" style="text-align:left;">
					<strong>level 18</strong>
				</div>
			</div>
			<a href="{{route('thread.username', array($output->username))}}" class="btn btn-primary btn-lg" role="button">Thread</a>
		</div>
	</div>
@stop