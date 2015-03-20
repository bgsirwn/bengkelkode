@extends('tampilan/index')
@section('content')
<!--####################################Login - Open #######################################--> 
    <div class="container">
        <div class="grid">
        	{{Form::open(array('class'=>'form-horizontal', 'url'=>route('login.auth', array('redirect'=>Input::get('redirect')))))}}
            <div class="login-panel col-md-12">
                <div class="col-md-8">
                    <h3><right>Join Now</right></h3>
                </div>

                <div class="panel col-md-4">
                    <div class="col-md-12">
                        <label>Username</label>
                        {{Form::text('username',Input::old('username'),array('class'=>'form-control','placeholder'=>'username','required', 'type'=>'text'))}}
                    </div>

                    <div class="col-md-12">
                        <label>Password</label>
                        {{Form::password('password',array('class'=>'form-control','placeholder'=>'Password', 'required','type'=>'password'))}}
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-8 tombollog">
                        	{{Form::checkbox('forever')}}
                            {{Form::label('forever', 'Remember me')}}
							
                        </div>
                        <div class="col-md-4 tombollog">
                            {{Form::submit('Login', array('class'=>'btn btn-success' , 'style'=>'margin-left:20px'))}}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--####################################Login - Close #######################################--> 
@stop