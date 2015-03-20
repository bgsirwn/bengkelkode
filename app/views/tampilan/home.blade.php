@extends('tampilan/index')
@section('title')
BengkelKoding
@stop
@section('content')
	<div class="container">
    	<div class="grid">
    	<!--############################## Head - Open ######################################################-->
    		<div class="judul col-md-12">
				<div class="col-md-10">
					<h2><strong>BengkelKoding.com</strong></h2>
					<p>Ask, Answer, and Promote Your Self</p>			
				</div>
				<div class="tombollog col-md-2">
					<a href="{{route('login')}}" class="btn btn-primary">Login</a>
					<span> or </span>
					<a href="{{route('signup')}}" class="btn btn-primary">Sign Up</a>
				</div>
    		</div>
    	<!--############################## Head - Close ######################################################-->
    	</div>

    	<div class="grid">
    	<!--############################## Hot Thread- Open ######################################################-->
    		@include('tampilan/hot-thread')
    	<!--############################## Hot Thread - Close ######################################################-->	
    		<div class="col-md-1">
    			
    		</div>

    		<!--############################## Categories - Open ######################################################-->
    		<div class="panel col-md-4">
    			<div class="col-md-2">
    				<h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span></h3>
    			</div>
    			<div class="col-md-10">
    				<h3>Categories</h3>
    			</div>
    			<div class="col-md-12">
    				<hr>
    			</div>
    			<div class="col-md-1">
    				
    			</div>
    			<div class="col-md-11">
                    @foreach($categories as $category)
    				<div class="col-md-10">
    					<p><a href="{{route('discover.advanced', ['allispossible',$category->name, 'allispossible'])}}">
                        {{$category->name}}</a></p>
    				</div>
    				<div class="col-md-2">
    					<p><span class="badge">{{$category->jumlah}}</span></p>
    				</div>
                    @endforeach
    			</div>
    		</div>
    		<!--############################## Categories - Close ######################################################-->
    	</div>

    	<div class="grid">
    		<!--############################## New Tutorial- Open ######################################################-->
    		<div class="panel col-md-7">
    			<div class="col-md-1">
    				<h3><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span></h3>
    			</div>
    			<div class="col-md-11">
    				<h3>New Tutorial</h3>
    			</div>
    		</div>

    		<div class="col-md-1">
    			
    		</div>
    		<!--############################## New Tutorial - Close ######################################################-->
    		<div class="panel col-md-4">
    			<div class="col-md-2">
    				<h3><span class="glyphicon glyphicon-check" aria-hidden="true"></span></h3>
    			</div>
    			<div class="col-md-10">
    				<h3>Polling of The Week</h3>
    			</div>
    			<div class="col-md-12">
    				<hr>
    			</div>
    			<div class="col-md-12">
    				<p>What the best programming languange ? </p>
    			</div>
    			<div class="col-md-12">
    				<p>PHP</p>
    				<div class="col-md-10">
    					<div class="progress">
  							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
   							 60%
						  </div>
						</div>
    				</div>
    				<div class="col-md-2">
    					<span><input type="radio" class="form-control radio-poll"></span>
    				</div>
    			</div>

    			<div class="col-md-12">
    				<p>Java</p>
    				<div class="col-md-10">
    					<div class="progress">
  							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
   							 60%
						  </div>
						</div>
    				</div>
    				<div class="col-md-2">
    					<span><input type="radio" class="form-control radio-poll"></span>
    				</div>
    			</div>

    			<div class="col-md-12">
    				<hr>
    			</div>

    			<div class="col-md-8">
    				
    			</div>

    			<div class="col-md-4">
    				<a href="#" class="btn btn-success">Submit</a>
    			</div>

    		</div>
    	</div>
    </div>
@stop
