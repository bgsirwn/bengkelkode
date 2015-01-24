@extends('default')
@section('title')
	{{"Bengkel Koding::discover"}}
@stop

@section('content')
	{{HTML::script('dist/js/ckeditor/ckeditor.js')}}
	<div class="container">
		<div class="grid" style="margin-bottom: 5px;">
			<div class="row" style="margin-top: 0px;">
				<div class="span12">
					<div id="threads">
						@foreach($output as $key)
						<div id="thread" style="margin:5px; background:none repeat scroll 0% 0% #F5F5F5; padding:20px">
							@if(Route::currentRouteName()!='thread.detail')
							<div id="viewnum" style="float: right; background: none repeat scroll 0% 0% #F87D05; padding: 5px; text-align: center; margin: 2px; width:78px">
								<strong>
								<p>View</p>
								<p>0</p>
								</strong>
							</div>
							<div id="commentnum" style="float: right; background: none repeat scroll 0% 0% rgb(42, 189, 33); padding: 5px; text-align: center; margin: 2px;">
								<strong>
								<p>Comment</p>
								<p>0</p>
								</strong>
							</div>
							@endif
							<div id="thread_c" style="width: 100%;">
								<a href="{{route('thread.detail',array(User::find($key->user_id)->username,$key->id))}}" style="color: black; font-size: 16px;">
									<span class="icon-comments-5"></span>
									<strong>{{$key->title}}</strong>
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
							</div>
							
						</div>
						@endforeach
						@if(Route::currentRouteName()!='thread.detail')
						{{$output->links()}}
						@endif
					</div>
				</div>

				<!--
					<div>		
						<div style="padding:15px;padding-bottom:5px; background:none repeat scroll 0% 0% #F5F5F5">
							<a href="{{route('thread.detail',array(User::find($key->user_id)->username,$key->id))}}" style="color: black; font-size: 16px;">
								<span class="icon-comments-5"></span>
								<strong>{{$key->title}}</strong>
							</a>
							<p style="font-size: 12px; margin-top:10px">
								<span class="icon-user"></span>
								<i>posted by </i>
								<a href="{{route('profile', array(User::find($key->user_id)->username))}}">{{User::find($key->user_id)->name}}</a>
						</div>
					</div>
				</div>

				<div class="span4">
					<div id="search">
						<div class="input-control text">
						    <input type="text" />
						    <button class="btn-search"></button>
					    </div>
					</div>
					-->
								
			</div>	
			
				<!--
				<table class="table bordered">

					<thead>
						<tr class="warning">
							<th class="text-left">
								<strong><a href="{{route('thread.detail',array(User::find($key->user_id)->username,$key->id))}}" style="color:white" >{{$key->title}}</a></strong>
							</th>
							
						</tr>	
					</thead>

					<tbody>

						<td>
								<a href="{{route('profile', array(User::find($key->user_id)->username))}}">{{User::find($key->user_id)->name}}</a>
							</td>

						<tr>
							<td>
								<p>{{htmlspecialchars_decode($key->thread)}}</p>
							</td>
						</tr>
						
					</tbody>
				</table>
				-->
			@if(Route::currentRouteName()=='thread.detail')
			<hr>
				<div id="respons">
					<h3>Answers</h3>
						<div class="row">
							<div class="span12">
								<div id="answers">
									<?php
										foreach($answer as $as){ ?>
											<div id="ans" style="background:none repeat scroll 0% 0% #F5F5F5; padding:20px; margin-bottom:10px">
												<a href="{{route('profile', array(User::find($as->user_id)->username))}}">{{User::find($as->user_id)->name}}</a>
												<hr style="height:4px; background-color:black">
												<p>{{htmlspecialchars_decode($as->answer)}}
											</div>
									<?php }?>
								</div>

								@if(Auth::check())
								<div>
									<h3>Beri solusi!</h3>
										{{Form::open()}}
										{{Form::textarea('answer','')}}
										{{Form::submit('Post', array('class'=>'success'))}}
										{{Form::close()}}
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
	
@stop