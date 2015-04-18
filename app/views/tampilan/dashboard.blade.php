@include('tampilan/load-asset')
@include('tampilan/navbar')

{{HTML::style('assets/css/styles.css')}}
{{HTML::style('assets/css/navbar.css')}}
{{HTML::style('assets/css/dashboard.css')}}

	<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                   <a href="#">Boot</a>
                </li>
                <li>
                     <button class="btn btn-primary">
                   		Tes
                   </button>
                </li>
                <li>
                    <button class="btn btn-primary">
                   		Post	
                   </button>
                </li>
                <li>
                    <a href="#"></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                	<div class="thread-dash col-md-12 col-sm-12 col-xs-12">
                		<div class="panel panel-default">
							  <!-- Default panel contents -->
							  <!-- Table -->
							  <table class="table table-dashboard">
							  	<thead>
							  		<tr>
							  			<th></th>
									  	<th>Topics</th>	
									  	<th>Replies</th>
										<th>View</th>
										<th>Last Activity</th>
									</tr>	
							  	</thead>
							  	<tbody>				
							  		<tr>
							  			<td><center><span class="glyphicon glyphicon-bookmark"></span></center></td>
							  			<td>
							  				<div class="col-md-12 thread-title">
							  					<p><strong>How To make web</strong></p>
							  				</div>
							  				<div class="col-md-12 thread-detail">
							  					<p>by admin >> Tue 22 April 2015 4:33 pm</p>
							  				</div>
							  			</td>
							  			<td class="thread-replies">
							  				<center><p>0 &nbsp <span class="glyphicon glyphicon-comment"></span></p></center>
							  			</td>
							  			<td class="thread-views">
							  				<p>265</p>
							  			</td>
							  			<td>
							  				<p>Comment by Admin</p>
							  				<p>Selasa, 20 Mar 2012</p>
							  				<p>1:56</p>
							  			</td>
							  		</tr>

							  		<tr>
							  			<td><center><span class="glyphicon glyphicon-bookmark"></span></center></td>
							  			<td>
							  				<div class="col-md-12 thread-title">
							  					<p><strong>How To make web</strong></p>
							  				</div>
							  				<div class="col-md-12 thread-detail">
							  					<p>by admin >> Tue 22 April 2015 4:33 pm</p>
							  				</div>
							  			</td>
							  			<td class="thread-replies">
							  				<center><p>0 &nbsp <span class="glyphicon glyphicon-comment"></span></p></center>
							  			</td>
							  			<td class="thread-views">
							  				<p>265</p>
							  			</td>
							  			<td>
							  				<p>Comment by Admin</p>
							  				<p>Selasa, 20 Mar 2012</p>
							  				<p>1:56</p>
							  			</td>
							  		</tr>

							  		<tr>
							  			<td><center><span class="glyphicon glyphicon-bookmark"></span></center></td>
							  			<td>
							  				<div class="col-md-12 thread-title">
							  					<p><strong>How To make web</strong></p>
							  				</div>
							  				<div class="col-md-12 thread-detail">
							  					<p>by admin >> Tue 22 April 2015 4:33 pm</p>
							  				</div>
							  			</td>
							  			<td class="thread-replies">
							  				<center><p>0 &nbsp <span class="glyphicon glyphicon-comment"></span></p></center>
							  			</td>
							  			<td class="thread-views">
							  				<p>265</p>
							  			</td>
							  			<td>
							  				<p>Comment by Admin</p>
							  				<p>Selasa, 20 Mar 2012</p>
							  				<p>1:56</p>
							  			</td>
							  		</tr>

							  		<tr>
							  			<td><center><span class="glyphicon glyphicon-bookmark"></span></center></td>
							  			<td>
							  				<div class="col-md-12 thread-title">
							  					<p><strong>How To make web</strong></p>
							  				</div>
							  				<div class="col-md-12 thread-detail">
							  					<p>by admin >> Tue 22 April 2015 4:33 pm</p>
							  				</div>
							  			</td>
							  			<td class="thread-replies">
							  				<center><p>0 &nbsp <span class="glyphicon glyphicon-comment"></span></p></center>
							  			</td>
							  			<td class="thread-views">
							  				<p>265</p>
							  			</td>
							  			<td>
							  				<p>Comment by Admin</p>
							  				<p>Selasa, 20 Mar 2012</p>
							  				<p>1:56</p>
							  			</td>
							  		</tr>
							  	</tbody>
							  </table>
						</div>
                	</div>

                </div>
            </div>
            @include('tampilan/footer')
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
