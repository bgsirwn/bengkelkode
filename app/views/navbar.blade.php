<div class="header">
	<nav class="navbar navbar-default navbar-custom" role="navigation">
		<div class="container-fluid">
			<!-- <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand" href="#">Bootflat</a>
			</div> -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav">
				
					<li>
						<a href="{{route('home')}}">Home</a>
					</li>

					<li>
						<a href="{{route('create')}}">Create</a>
					</li>

					<li>
						<a href="{{route('discover')}}">Discover</a>
					</li>
					@if(!Auth::check())
					<li>
						<a href="{{route('signup')}}">Sign Up</a>
					</li>

					<li>
						<a href="{{route('login')}}">Login</a>
					</li>
					@endif
					
				</ul>
				<form class="navbar-form navbar-right" role="search" style="margin-right: 150px">
					<div class="form-search search-only">
						<i class="search-icon glyphicon glyphicon-search"></i> 
						<input class="form-control search-query">
					</div>
				</form>
			</div>
		</div>
	</nav>
</div>
