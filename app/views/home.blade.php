@extends('default')
@section('title')
	{{"Bengkel Koding"}}
@stop

@section('content')

<div id="content" style="background: #044F67; height: 600px;">
	<div class="container">
		<div class="row">
			<div style="padding-top: 70px">
				<div class="row" style="margin-bottom: 40px">
					<div class="col-md-2">
					{{HTML::image('asset/img/icon-ask.png','', array('style'=>'width: 140px'))}}
					</div>
					<div class="col-md-10" style="margin-bottom: 0px">
						<div style="height: 0px; width: 550px">
							<h2>Ask Question</h2>
						</div>
					</div>
				</div>
				

				<div class="row" style="margin-bottom: 40px">
					<div class="col-md-2">
					{{HTML::image('asset/img/icon-answer.png','', array('style'=>'width: 140px'))}}
					</div>
					<div class="col-md-10" style="margin-bottom: 0px">
						<div style="height: 0px; width: 550px">
							<h2> Answer </h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
					{{HTML::image('asset/img/icon-self.png','', array('style'=>'width: 140px'))}}
					</div>
					<div class="col-md-10" style="margin-bottom: 0px">
						<div style="height: 0px; width: 550px">
							<h2>Improve your skill and get the point</h2>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
	</div>	
</div>


<div class="content" style="background-color: white;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			<span class="icon-list"></span><b> Hot Thread</b>
					<ul class="unstyled">
						<li><span class="icon-newspaper"></span> Cara membuat Aplikasi
						<li><span class="icon-newspaper"></span> laravel 5 Auth
						<li><span class="icon-newspaper"></span> tutorial SEO
						<li><span class="icon-newspaper"></span> Cara membuat Aplikasi
						<li><span class="icon-newspaper"></span> Cara membuat Aplikasi
						<li><span class="icon-newspaper"></span> Cara membuat Aplikasi
					</ul>
				</div>

				<div class="col-md-4">
				<span class="icon-list"></span><b> Newest Thread</b>
					<ul class="unstyled">
						<li><span class="icon-arrow-right-5"></span> Cara membuat Aplikasi
						<li><span class="icon-arrow-right-5"></span> Cara membuat Aplikasi
						<li><span class="icon-arrow-right-5"></span> Cara membuat Aplikasi
						<li><span class="icon-arrow-right-5"></span> Cara membuat Aplikasi
						<li><span class="icon-arrow-right-5"></span> Cara membuat Aplikasi
						<li><span class="icon-arrow-right-5"></span> Cara membuat Aplikasi
					</ul>
				</div>

			</div>
		</div>
</div>

@stop
