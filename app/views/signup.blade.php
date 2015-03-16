@extends('default')
@section('title')
	{{"Bengkel Koding::Sign up"}}
@stop
@section('content')
{{HTML::style('asset/css/custom.css')}}
{{HTML::style('asset/css/css.css')}}
{{HTML::style('asset/css/style.css')}}
{{HTML::style('asset/css/bootstrap.css')}}
{{HTML::style('asset/css/settings.css')}}	

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign Up Form</h3>
                </div>
                {{Form::open(['method'=>'post','url'=>route('signmeup')])}}
                <div class="panel-body">
                    <!-- <div class="col-md-2">
                        <button class="btn btn-primary">Add</button>
                    </div> -->

                    <div class= "col-md-10">
                        <div class="col-md-12">
                            {{Form::label('Name')}}
                            {{$errors->first('name')}}
                            {{Form::text('name', '', array('class'=>'form-control'))}}
                        </div>
                        <!-- <div class="col-md-6">
                            {{Form::label('Last Name')}}
                            {{Form::text('', '', array('class'=>'form-control'))}}
                        </div> --> 
                        <div class="col-md-12">
                            {{Form::label('Email')}}
                            {{$errors->first('email')}}
                            {{Form::email('email', '', array('class'=>'form-control'))}}
                        </div>                 
                        <div class="col-md-12">
                            {{Form::label('Username')}}
                            {{$errors->first('username')}}
                            {{Form::text('username', '', array('class'=>'form-control'))}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('Password')}}
                            {{$errors->first('password')}}
                            {{Form::password('password', array('class'=>'form-control'))}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('Confirm Password')}}
                            {{Form::password('password_confirmation', array('class'=>'form-control'))}}
                        </div>

                    </div>
                </div>
                <hr>
                <div class="col-md-2">
                    
                </div>
                <div class="col-md 10">
                    {{$errors->first('note')}}
                    {{Form::checkbox('note')}}
                    <span>
                        I agree with term condotion
                    </span>
                    {{Form::submit('Sign Up', array('class'=>'btn btn-primary','style'=>'margin-left: 300px'))}}
                </div>
                <br>
                {{Form::close()}}
            </div>

        </div>
        <div class="col-md-4">
            @include('poll')

        </div>
    </div>
</div>
@stop