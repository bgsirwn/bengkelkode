@extends('default')
@section('title')
	{{"Bengkel Koding::discover"}}
@stop

@section('content')
	{{HTML::script('dist/js/ckeditor/ckeditor.js')}}
	{{HTML::style('asset/css/custom.css')}}


	
	<div class="container">
		
			<div class="row">
				<div class="col-lg-4 col-md-4">
					@include('categories')

					@include('poll')
					</div>
				<div class="col-md-8">
					@foreach($thread as $key)
					@if(Route::currentRouteName()!='{username}.thread.show')
					<div class="post">
                            <div class="wrap-ut pull-left">
                                @include('avatar')
                                <div class="posttext pull-left">
                                   <h2>
                                   		<a href="{{route('{username}.thread.show',array(User::find($key->user_id)->username,$key->id))}}" style="color: black; font-size: 22px;">
											{{$key->title}}
										</a>
									</h2>
                                    <p>short description</p>
                                </div>
                                
                                <div class="clearfix"></div>
                                </div>
                                
                                <div class="postinfo pull-left">
                                    <div class="comments">
                                        <div class="commentbg">
                                        <!-- {{var_dump($key->comments)}} -->
                                        	{{$key->comments}}
                                            <div class="mark"></div>
                                        </div>
                                    </div>
                                    <div class="views"><i class="icon-eye"></i>  {{$key->view}}</div>
                                    <div class="time"><i class="icon-clock"></i> 24 min</div>                                    
                                </div>
                                <div class="clearfix">
                                	<div>
                                	Category: {{$key->category->name}}
                                	</div>
                                	<div>
                                	Tags: 
                                	@for($i=0;$i < count($key->tags); $i++)
                                		{{$key->tags[$i]}}
                                	@endfor
                                	</div>
                                	@if(Auth::check()&&Auth::id()==$key->user_id)
                                	<div>
                                		<a href="{{route('{username}.thread.edit', [Auth::user()->username,$key->id])}}">edit</a>
                                		<a>delete</a>
                                	</div>
                                	@endif
                                </div>
                            </div>
                            @else
                            <div class="post beforepagination">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                           <img class="cycle span" src="{{URL::asset('asset/img/'.User::find($key->user_id)->photo)}}" style="width: 50px ! important;">
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon1.jpg" alt=""><img src="images/icon4.jpg" alt=""><img src="images/icon5.jpg" alt=""><img src="images/icon6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="{{route('{username}.thread.show',array(User::find($key->user_id)->username,$key->id))}}" style="color: black; font-size: 22px;">
									{{$key->title}}
								</a></h2>
                                        {{htmlspecialchars_decode($key->thread)}}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                              
                                <div class="postinfobot">

                                    <div class="likeblock pull-left">
                                        <a href="{{$vote_link}}" class="up"><i class="fa fa-thumbs-o-up"></i>{{$button}}</a>
                                        <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>{{count(json_decode($key->votes))}}</a>
                                    </div>

                                    <div class="prev pull-left">                                        
                                        <a href="#"><i class="icon-reply"></i></a>
                                    </div>

                                    <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : {{$key->created_at}}</div>

                                    <div class="next pull-right">                                        
                                        <a href="#"><i class="icon-share"></i></a>

                                        <a href="#"><i class="icon-flag"></i></a>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            @endif
                            @endforeach

					@if(Route::currentRouteName()!='{username}.thread.show')
						{{$thread->links()}}
						@endif

						@if(Route::currentRouteName()=='{username}.thread.show')
				<div id="respons">
					<h3>Answers</h3>
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div id="answers">
								<?php
										foreach($answer as $as){ ?>
								@include('comment')
									<!--
											<div id="ans" style="background:none repeat scroll 0% 0% #F5F5F5; padding:20px; margin-bottom:10px">
												<a href="{{route('profile', array(User::find($as->user_id)->username))}}">{{User::find($as->user_id)->name}}</a>
												<hr style="height:4px; background-color:black">
												<p>{{htmlspecialchars_decode($as->answer)}}
											</div>
											-->
									<?php }?>
								</div>

								@if(Auth::check())
								<div>
									<h3>Beri solusi!</h3>

										@include('answer')
<!--
										{{Form::open()}}
										{{Form::textarea('answer','')}}
										{{Form::submit('Post', array('class'=>'success'))}}
										{{Form::close()}}
										-->
										<script>
											CKEDITOR.replace( 'answer', {
									    	language: 'id',
									    	uiColor: 'whitesmoke'
											});
										</script>
								</div>
								@else
								<div id="respon-login" style="margin-top:50px">
									<center>
										<p style="color:white">Want to Disscuss ?</p>
										<a class="primary" href="{{route('login', array('redirect'=>convert_uuencode(Request::url())))}}"><button class="primary">Log in Here</button></a>
										
									</center>

								</div>
								@endif
							</div>
						</div>	
			@endif
			</div>
				</div>
				
			</div>
			
		</div>
	
</div>
	
@stop