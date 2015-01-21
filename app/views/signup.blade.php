@extends('default')
@section('title')
	{{"Bengkel Koding::Sign up"}}
@stop
@section('content')
	
	<div class="container">
		<div class="grid">
			<div class="row">

				<div class="span4">
					
				</div>

				<div class="span6">
					<div style="background-color:#E03131">
						{{Form::open(array('class'=>'form-horizontal','style'=>'width:200px;margin:auto'))}}
							<div class="form-group">
							{{Form::label('name','Name')}}
							{{Form::text('name','',array('class'=>'form-control','placeholder'=>'name','required'))}}
							</div>
							<div class="form-group">
							{{Form::label('username','Username')}}
							{{Form::text('username','',array('class'=>'form-control', 'placeholder'=>'username','required'))}}
							</div>
							<div class="form-group">
							{{Form::label('email','Email')}}
							{{Form::email('email','',array('placeholder'=>'email', 'class'=>'form-control','required'))}}
							</div>
							<div class="form-group">
							{{Form::label('password','Password')}}
							{{Form::password('password',array('placeholder'=>'password', 'class'=>'form-control','required'))}}
							</div>
							<div class="g-recaptcha" data-sitekey="6LegygATAAAAAHztFZUwl5aDTouvy70Rl_yS8bHe"></div>
							<div class="form-group">
							{{Form::submit('Sign up', array('class'=>'btn btn-default'))}}
							</div>
						{{Form::close()}}
					</div>

					<div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	
@stop