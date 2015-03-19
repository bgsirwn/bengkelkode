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

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{route('create')}}">Create</a>
							</li>

							<li>
								<a href="{{route('discover')}}">Discover</a>
							</li>

						</ul>
					</li>

					<li>
						<a href="">Notifications
						<span class="badge badge-danger">42</span>
						</a>
					</li>

					
					

					

					<!-- <li>

						<div class="btn-group"><button type="button" class="btn btn"><i class="glyphicon glyphicon-home"></i></button> <button type="button" class="btn btn"><i class="glyphicon glyphicon-user"></i></button> <button type="button" class="btn btn"><i class="glyphicon glyphicon-comment"></i></button> <button type="button" class="btn btn"><i class="glyphicon glyphicon-cog"></i></button></div>
					</li> -->

					
					@if(!Auth::check())



					<li>
						<a href="{{route('signup')}}">Sign Up</a>
					</li>


					<li>
						<a href="{{route('login')}}">Login</a>
					</li>

					@else

					<a button type="button" class="btn btn-warning navbar-btn" href="{{route('logout')}}">Logout</a>
					<!-- <li>
						<a href="{{route('logout')}}">Log out</a>
					</li> -->
					@endif
					
				</ul>

				<p class="navbar-text navbar-right">
					<a class="navbar-link" href={{route('profile')}}>Signed in as Mark Otto</a>
				</p>
				

				
			</div>
		</div>
	</nav>
</div>
