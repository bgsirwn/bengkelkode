@extends('default')
@section('title')
	{{"Bengkel Koding"}}
@stop



@section('content')

<div id="content" style="background: none repeat scroll 0% 0% #26A65B; height:250px">
	<div class="container">
		<div class="grid" style="padding-top: 20px; padding-bottom: 20px; text-align: center">
			<center><h1><strong style="color: white">Bengkelkoding</strong></h1></center>
			<center><h3><strong style="color: white">Beginner and Profesional Programmers Forum</strong></h3></center>
				<center>
			    <div class="input-group form-search" style="width: 500px">
			    	<input class="form-control search-query">
			    		<span class="input-group-btn">
			    			<button type="submit" class="btn btn-primary" data-type="last">Search</button>
			    		</span>
			    </div>
			    </center>
		</div>
	</div>
</div>

<div id="content" style="margin-top: 40px;">
	<div class="container">
		<div class="row">
			<div class="col-md-4" style="text-align:center">
				{{HTML::image('/dist/images/icon-ask.jpeg', '', array('style'=>'height: 57px; width: 57px'))}}
				<center><h3><strong>Ask ?</strong></h3></center>
				<center>Anda bisa bertanya apa pun seputar pemrograman, di forum ini terdapat banyak sekali master-master di bidangnya. Jangan malu-malu!</center>
		
			</div>
			<div class="col-md-4" style="text-align:center">
				{{HTML::image('/dist/images/icon-answer.jpg', '', array('style'=>'height: 57px; width: 57px'))}}
				<center><h3><strong>Answer !</strong></h3></center>
				<center>Ayo! Berbagilah solusi di sini, jadilah bermanfaat. Karena sebaik-baik manusia adalah yang bermanfaat bagi sesama. Bantu teman-teman menyelesaikan masalahnya.</center>	
			</div>
			<div class="col-md-4" style="text-align:center">
				{{HTML::image('/dist/images/icon-self.jpg', '', array('style'=>'height: 57px; width: 57px'))}}
				<center><h3><strong>Self Branding $</strong></h3></center>
				<center>Tingkatkan level anda dengan menjawab pertanyaan dengan baik, semakin banyak problem solving, semakin tinggi level anda! Anda bisa mempromosikan diri sebagai freelancer yang kompetitif!</center>
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
