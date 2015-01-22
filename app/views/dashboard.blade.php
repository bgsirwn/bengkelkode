@extends('default')
@section('title')
	{{"Bengkel Koding"}}
@stop
@section('content')
	<div id="content-inner" style="margin-top:20px">
		@yield('content-inner')
	</div>

	<div class="content">
		<div class="container">
			<div class="grid">
				<div class="row">
					<div class="span8">
						<div id="disscuss-menu">
							<div id="top_bar">
								
							</div>
							<div id="disscus_c">
								
							</div>
						</div>
					</div>

					<div class="span4">
						<div id="search_form" style="background: none repeat scroll 0% 0% #F5F5F5; padding-top: 7px; padding-right: 7px; padding-left: 7px;">
							<div class="input-control text">
								<input type="text" />
								<button class="btn-search"></button>
							</div>
						</div>



					</div> 
				</div>
			</div>
		</div>
	</div>
@stop
