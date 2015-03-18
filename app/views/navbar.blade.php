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
						<a class="nav-link current" href="{{route('home')}}">Home</a>
					</li>

					<li>
						<a href="{{route('create')}}">Create</a>
					</li>

					<li>
						<a href="{{route('discover')}}">Discover</a>
					</li>

					<li>
						<a href="">Notifications
							<span class="badge badge-danger">42</span>
						</a>
					</li>

					<!-- <li>

						<div class="btn-group"><button type="button" class="btn btn"><i class="glyphicon glyphicon-home"></i></button> <button type="button" class="btn btn"><i class="glyphicon glyphicon-user"></i></button> <button type="button" class="btn btn"><i class="glyphicon glyphicon-comment"></i></button> <button type="button" class="btn btn"><i class="glyphicon glyphicon-cog"></i></button></div>
					</li> -->

					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a><ul class="dropdown-menu" role="menu"><li class="dropdown-header">Setting</li><li><a href="#">Action</a></li><li><a href="#">Another action</a></li><li><a href="#">Something else here</a></li><li class="divider"></li><li class="active"><a href="#">Separated link</a></li><li class="divider"></li><li class="disabled"><a href="#">One more separated link</a></li></ul></li>
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
