@extends('default')
@section('title')
	{{"Bengkel Koding"}}
@stop
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12"><div class="timeline"><dl><dt>Apr 2014</dt><dd class="pos-right clearfix"><div class="circ"></div><div class="time">Apr 14</div><div class="events"><div class="pull-left"><img class="events-object img-rounded" src="img/photo-1.jpg"></div><div class="events-body"><h4 class="events-heading">Bootstrap</h4><p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></div></div></dd><dd class="pos-left clearfix"><div class="circ"></div><div class="time">Apr 10</div><div class="events"><div class="pull-left"><img class="events-object img-rounded" src="img/photo-2.jpg"></div><div class="events-body"><h4 class="events-heading">Bootflat</h4><p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></div></div></dd><dt>Mar 2014</dt><dd class="pos-right clearfix"><div class="circ"></div><div class="time">Mar 15</div><div class="events"><div class="pull-left"><img class="events-object img-rounded" src="img/photo-3.jpg"></div><div class="events-body"><h4 class="events-heading">Flat UI</h4><p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></div></div></dd><dd class="pos-left clearfix"><div class="circ"></div><div class="time">Mar 8</div><div class="events"><div class="pull-left"><img class="events-object img-rounded" src="img/photo-4.jpg"></div><div class="events-body"><h4 class="events-heading">UI design</h4><p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></div></div></dd></dl></div></div>
	</div>
</div>

	<!-- <div class="content">
		<div class="container">
			<div class="grid">
				<div class="row">
					<div class="col-md-8">
						<div class="col-md-12">
							<div class="timeline">
								<dl>
									<dt>Apr 2014</dt>
									<dd class="pos-right clearfix">
										<div class="circ"></div>
										<div class="time">Apr 14</div>
										<div class="events">
											<div class="pull-left">
												<img class="events-object img-rounded" src="img/photo-1.jpg">
											</div>
											<div class="events-body">
												<h4 class="events-heading">Bootstrap</h4>
												<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
											</div>
										</div>
									</dd>
									<dd class="pos-left clearfix"><div class="circ"></div><div class="time">Apr 10</div><div class="events"><div class="pull-left"><img class="events-object img-rounded" src="img/photo-2.jpg"></div><div class="events-body"><h4 class="events-heading">Bootflat</h4><p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></div></div></dd><dt>Mar 2014</dt><dd class="pos-right clearfix"><div class="circ"></div><div class="time">Mar 15</div><div class="events"><div class="pull-left"><img class="events-object img-rounded" src="img/photo-3.jpg"></div><div class="events-body"><h4 class="events-heading">Flat UI</h4><p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></div></div></dd><dd class="pos-left clearfix"><div class="circ"></div><div class="time">Mar 8</div><div class="events"><div class="pull-left"><img class="events-object img-rounded" src="img/photo-4.jpg"></div><div class="events-body"><h4 class="events-heading">UI design</h4><p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></div></div></dd></dl></div></div>
						<div id="disscuss-menu">
							<div class="tab-control" data-effect="fade" data-role="tab-control">
                        		<ul class="tabs">
		                            <li class="active"><a href="#___1">My Thread</a></li>
		                            <li class=""><a href="#___2">Tab 2</a></li>
		                            <li class=""><a href="#___3">Tab 3</a></li>
                        		</ul>
                        		<div class="frames">
                            		<div style="display: block; padding:0px" class="frame" id="___1">
                                		@foreach(Session::get('notifications') as $key)
							<div id="disscus_c" style="background: none repeat scroll 0% 0% rgb(245, 245, 245); padding:20px">
								<div id="disscuss_c_t">
								<span class="icon-comments"></span>
									{{$key->message}}
								</div>
								<div "disscuss_c_d">
									<span class="icon-comments-2"></span>
								</div>
							</div>
							<hr style="margin:0px; background-color:#515151">
							@endforeach
                            		</div>
                            		<div style="display: none;" class="frame" id="___2">
		                                Aliquam ornare libero eget leo imperdiet varius. Aenean fringilla orci volutpat enim lobortis, id elementum lectus consectetur. Integer id ante nec ligula consectetur rutrum imperdiet vel tellus. Nam a lectus placerat, pretium risus ut, rutrum orci.
		                            </div>
		                            <div style="display: none;" class="frame" id="___3">
		                                Duis malesuada, dolor eu sollicitudin sagittis, leo sapien vehicula nunc, lobortis ornare tellus augue ac augue. Suspendisse sagittis sit amet ante ac suscipit. Duis ligula metus, auctor ut risus et, blandit suscipit lectus. Pellentesque cursus adipiscing tortor at malesuada.
		                            </div>
                        		</div>
                    		</div>

						{{$output->links()}}
							

						</div>
					</div>

					<div class="span4">
						<div id="search_form" style="background: none repeat scroll 0% 0% #F5F5F5; padding-top: 7px; padding-right: 7px; padding-left: 7px;">
							<div class="input-control text">
								<input type="text" />
								<button class="btn-search"></button>
							</div>
						</div>
						<button class="primary large" style="margin-top:10px; width:300px">Ask Question</button>
					</div> 
				</div>
			</div>
		</div>
	</div> -->
@stop


