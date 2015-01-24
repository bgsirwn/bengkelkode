@extends('default')
@section('title')
	{{"Bengkel Koding::Sign up"}}
@stop
@section('content')
	<script type="text/javascript" src="dist/js/jquery/jquery.validate.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#signup-form").validate({
			    rules:{ name:"required",
			            umur:{required:true,number: true},     
			            username:"required",
			            password:{required: true,minlength:6},     
			            //cpassword:{required: true,equalTo: "#password"},
			            email:{required:true,email:true},
			          },
			    messages:{
			            name:{required:'Nama harus di isi'},
			            umur:{
			                required:'Umur harus di isi',
			                number  :'Hanya boleh di isi Angka'},
			            username: {
			                required:'Username harus di isi'},
			            password: {
			                required :'Password harus di isi',
			                minlength:'Password minimal 5 karakter'},
			            //cpassword: {
			             //   required:'Ulangi Password harus di isi',
			             //   equalTo :'Isinya harus sama dengan Password'},
			            email: {
			                required:'Email harus di isi',
			                email   :'Email harus valid'},
			            
			     success: function(label) {
			        label.text('OK!').addClass('valid');}
			    });
			});
	</script>

	<div class="container">
		<div class="grid">
			<div class="row">

				<div class="span4">
					
				</div>

				<div class="span6" style="margin-top: 100px; margin-bottom:100px">
					<div style="background-color:#E03131; padding:30px; width:80%">
						<h2>
							<span class="icon-user" style="margin-right:5px; margin-left:10px"></span>
							Sign Up
						</h2>
						{{Form::open(array('class'=>'form-horizontal', 'id'=>'signup-form'))}}
							<div class="form-group input-control text" data-role="input-control" style="margin:5px">
								<!--{{Form::label('name','Name')}}-->
								<span class="label">Nama *</span>
								{{Form::text('name',Input::old('name'),array('class'=>'form-control','placeholder'=>'name','required'))}}
								<button type="button" class="btn-clear" tabindex="-1"></button>	
							</div>

							{{$errors->first('username')}}
							<div class="form-group input-control text" data-role="input-control" style="margin:5px">
								<!--{{Form::label('username','Username')}}-->
								{{Form::text('username',Input::old('username'),array('class'=>'form-control', 'placeholder'=>'username','required'))}}
								<button type="button" class="btn-clear" tabindex="-1"></button>
							</div>
							{{$errors->first('email')}}		
							<div class="form-group input-control text" data-role="input-control" style="margin:5px">
								<!--{{Form::label('email','Email')}}-->
								{{Form::email('email',Input::old('email'),array('placeholder'=>'email', 'class'=>'form-control','required'))}}
								<button type="button" class="btn-clear" tabindex="-1"></button>
							</div>
							{{$errors->first('password')}}
							<div class="form-group input-control password" data-role="input-control" style="margin:5px">
								<!--{{Form::label('password','Password')}}-->
								{{Form::password('password',array('placeholder'=>'password', 'class'=>'form-control','required'))}}
								<button type="button" class="btn-reveal" tabindex="-1"></button>
							</div>
							{{$errors->first('g-recaptcha-response')}}
							<div style="margin-top:20px;margin-bottom:20px;margin-left:5px">
							{{View::make('recaptcha::display')}}
							</div>
							<div class="form-group">
							{{Form::submit('Sign up', array('class'=>'primary','style'=>'margin:5px'))}}
							</div>
						{{Form::close()}}
					</div>

					<div>
						
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--
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
							{{View::make('recaptcha::display')}}
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
-->
	
@stop