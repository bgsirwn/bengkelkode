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
                {{Form::open()}}
                <div class="panel-body">
                    <!-- <div class="col-md-2">
                        <button class="btn btn-primary">Add</button>
                    </div> -->
                    <div class= "col-md-10">
                        <div class="col-md-6">
                            {{Form::label('First Name')}}
                            {{Form::text('', '', array('class'=>'form-control'))}}
                        </div>
                         <div class="col-md-6">
                            {{Form::label('Last Name')}}
                            {{Form::text('', '', array('class'=>'form-control'))}}
                        </div>                  
                        <div class="col-md-12">
                            {{Form::label('Username')}}
                            {{Form::text('', '', array('class'=>'form-control'))}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('Password')}}
                            {{Form::password('', array('class'=>'form-control'))}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('Confirm Password')}}
                            {{Form::password('', array('class'=>'form-control'))}}
                        </div>

                    </div>
                </div>
                <hr>
                <div class="col-md-2">
                    
                </div>
                <div class="col-md 10">
                    
                    {{Form::checkbox('agreement')}}
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