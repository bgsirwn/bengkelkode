@extends('default')
@section('title')
	{{"Bengkel Koding::login"}}
@stop
@section('content')
	<div class="container">
			<div class="grid">
				<div class="row">
					<div class="span4">
						
					</div>

					<div class="span6" style="margin-top: 100px; margin-bottom: 100px;">

					@if($errors->any())
						<script>
							$(function(){
                                $.Notify({
                                    shadow: true,
                                    position: 'bottom-right',
                                    content: "{{$errors->first()}}"
                                });
                            });
						</script>
<!--
						<div class="alert" style="margin-bottom:5px">
							<a class="close" dismiss="alert">x</a>
							<strong>{{$errors->first()}}</strong>
						</div>
						-->
					@endif


	<div style="background-color: rgb(92, 92, 231); padding: 30px; width: 80%;">

		<h2><span style="margin-right: 10px; margin-left: 5px;" class="icon-user"></span>Login</h2>
		{{Form::open(array('class'=>'form-horizontal'))}}	
			<div class="form-group input-control text" data-role="input-control" style="margin:5px">
				
				{{Form::text('username','',array('class'=>'form-control','placeholder'=>'username','required', 'type'=>'text', 'style'=>'font-size:16px'))}}
				<button type="button" class="btn-clear" tabindex="-1"></button>				
			</div>

			<div class="form-group input-control password" data-role="input-control" style="margin:5px">
				
				{{Form::password('password',array('class'=>'form-control','placeholder'=>'Password', 'required','type'=>'password'))}}
				<button type="button" class="btn-reveal" tabindex="-1"></button>				
			</div>
							
			<div class="form-group">
				{{Form::submit('Login', array('class'=>'primary' , 'style'=>'margin:5px'))}}
			</div>
		{{Form::close()}}
	</div>
						

					<div class="span4">
						
					</div>


				</div>
				
			</div>
		</div>
		{{Form::close()}}

<!--
	{{Form::open(array('class'=>'form-horizontal','style'=>'width:200px;margin:auto'))}}
		
		





		<div class="form-group">
		{{Form::label('username','Username')}}
		{{Form::text('username','',array('class'=>'form-control', 'placeholder'=>'username','required'))}}
		</div>
		<div class="form-group">
		{{Form::label('password','Password')}}
		{{Form::password('password',array('placeholder'=>'password', 'class'=>'form-control','required'))}}
		</div>
		<div class="form-group">
		{{Form::submit('Login', array('class'=>'btn btn-default'))}}
		</div>
	{{Form::close()}}
	-->
@stop