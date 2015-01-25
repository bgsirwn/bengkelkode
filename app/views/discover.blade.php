@extends('default')
@section('title')
	{{"Bengkel Koding::discover"}}
@stop

@section('content')
	{{HTML::script('dist/js/ckeditor/ckeditor.js')}}
	<div class="container">
		<div class="grid">
			<div class="row">

				<div class="col-lg-4 col-md-4">
					<div class="sidebarblock">
                                <h3>Categories</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <ul class="cats">
                                        <li><a href="#">Java <span class="badge pull-right">20</span></a></li>
                                        <li><a href="#">PHP <span class="badge pull-right">10</span></a></li>
                                        <li><a href="#">HTML <span class="badge pull-right">50</span></a></li>
                                        <li><a href="#">Looking for Players <span class="badge pull-right">36</span></a></li>
                                        <li><a href="#">Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a></li>
                                        <li><a href="#">Video &amp; Audio Drivers <span class="badge pull-right">11</span></a></li>
                                        <li><a href="#">2K Official Forums <span class="badge pull-right">5</span></a></li>
                                    </ul>
                                </div>
                            </div>
					</div>
				<div class="col-lg-8 col-md-8">
					@foreach($output as $key)
					@if(Route::currentRouteName()!='thread.detail')
					<div class="post">
                            <div class="wrap-ut pull-left">
                                @include('avatar')
                                <div class="posttext pull-left">
                                   <h2>
                                   		<a href="{{route('thread.detail',array(User::find($key->user_id)->username,$key->id))}}" style="color: black; font-size: 22px;">
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
                                        	{{$key->comments}}
                                            <div class="mark"></div>
                                        </div>

                                    </div>
                                    <div class="views"><i class="icon-eye"></i>  {{$key->view}}</div>
                                    <div class="time"><i class="icon-clock"></i> 24 min</div>                                    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            @else
                            <div class="post beforepagination">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                           <img class="cycle span" src="http://localhost/bengkelkoding/public/dist/images/pp_blank.jpeg" style="width: 50px ! important;">
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                        <div class="icons">
                                            <img src="images/icon1.jpg" alt=""><img src="images/icon4.jpg" alt=""><img src="images/icon5.jpg" alt=""><img src="images/icon6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><a href="{{route('thread.detail',array(User::find($key->user_id)->username,$key->id))}}" style="color: black; font-size: 22px;">
									{{$key->title}}
								</a></h2>
                                        {{htmlspecialchars_decode($key->thread)}}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                              
                                <div class="postinfobot">

                                    <div class="likeblock pull-left">
                                        <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>25</a>
                                        <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>3</a>
                                    </div>

                                    <div class="prev pull-left">                                        
                                        <a href="#"><i class="icon-reply"></i></a>
                                    </div>

                                    <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : 20 Nov @ 9:30am</div>

                                    <div class="next pull-right">                                        
                                        <a href="#"><i class="icon-share"></i></a>

                                        <a href="#"><i class="icon-flag"></i></a>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            @endif
                            @endforeach
<!-- akhir percobaan-->	
<!--
					<div id="threads">
						@foreach($output as $key)
						<div id="thrad" style="margin:5px; background:none repeat scroll 0% 0% rgb(255, 255, 255); margin-bottom:20px" class="shadow">
							@if(Route::currentRouteName()!='thread.detail')
							<div id="thread-right" style="float:right; width:120px; border-left:2px solid #ECF0F1; text-align:center" >
								<div id="comment" style="margin-bottom:10px; padding-top:10px">
									<span class="icon-comments-3"></span>
									{{$key->comments}}
									
								</div>
								<div id="view" style="padding-top:10px; margin-bottom:10px;border-top:2px solid #ECF0F1">
									<span class="icon-eye"></span>
										{{$key->view}}
									
								</div>
							
								<div id="viewnum" style="float: right; background: none repeat scroll 0% 0% #F87D05; padding: 5px; text-align: center; margin: 2px; width:78px">
									<strong>
										<p>View</p>
										<p>{{$key->view}}</p>
									</strong>
								</div>
								<div id="commentnum" style="float: right; background: none repeat scroll 0% 0% rgb(42, 189, 33); padding: 5px; text-align: center; margin: 2px;">
									<strong>
										<p>Comment</p>
										<p>{{$key->comments}}</p>
									</strong>
								</div>
								
								
							</div>

							<div id="thread-left" style="float: left; border-right: 2px solid #ECF0F1; padding: 20px;">
									<img class="cycle span" src="http://localhost/bengkelkoding/public/dist/images/pp_blank.jpeg" style="width: 50px ! important;">
							</div>

							<div id="thread-middle" style="padding-top: 20px; padding-left: 120px; height: 85px;">
								<a href="{{route('thread.detail',array(User::find($key->user_id)->username,$key->id))}}" style="color: black; font-size: 22px;">
									{{$key->title}}
								</a>
								<p style="font-size: 8pt;">
								<span class="icon-clock"></span>
								posted on : &nbsp 20 Januari 2015 @ 6.09pm
							</div>

							@else

							<div id="thread-left" style="float: left; border-right: 2px solid #ECF0F1; padding: 20px;">
									<img class="cycle span" src="http://localhost/bengkelkoding/public/dist/images/pp_blank.jpeg" style="width: 50px ! important;">
							</div>

							<div id="thread-middle" style="padding-top: 20px; padding-left: 120px; height: auto !important;">
								<a href="{{route('thread.detail',array(User::find($key->user_id)->username,$key->id))}}" style="color: black; font-size: 22px;">
									{{$key->title}}
								</a>

								<p>{{htmlspecialchars_decode($key->thread)}}</p>


							</div>

							
							@endif
							
							<div id="thread_c" style="width: 100%;">
								<a href="{{route('thread.detail',array(User::find($key->user_id)->username,$key->id))}}" style="color: black; font-size: 24px;">
									{{$key->title}}
									@if(Route::currentRouteName()=='thread.detail')
									<hr style="height:4px; background-color:black">
									@endif
								</a>
								@if(Route::currentRouteName()=='thread.detail')
								<p>{{htmlspecialchars_decode($key->thread)}}</p>
								@endif

								<p style="font-size: 12px; margin-top:10px">
								<span class="icon-user"></span>
								<i>posted by </i>
								<a href="{{route('profile', array(User::find($key->user_id)->username))}}">{{User::find($key->user_id)->name}}</a>
								@if(Auth::id()==$key->user_id)
							<a href="{{route('thread.edit',array(User::find($key->user_id)->username, $key->id))}}">Edit</a>
							{{Form::open(array('style'=>'display:inline-block'))}}
							{{Form::submit('delete')}}
							{{Form::close()}}
							@endif
							</div>
							
							
						</div>
						@endforeach
						
					</div>
					-->
					@if(Route::currentRouteName()!='thread.detail')
						{{$output->links()}}
						@endif

						@if(Route::currentRouteName()=='thread.detail')
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
</div>
	
@stop