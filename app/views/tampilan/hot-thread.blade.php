            <div class="panel col-md-7">
    			<div class="col-md-1">
    				  <h3><span class="glyphicon glyphicon-fire" aria-hidden="true"></span></h3>
    			</div>
    			<div class="col-md-11">
    				<h3><strong>Hot Threads</strong></h3>
    			</div>
    			<div class="col-md-12">
    				<hr>
    			</div>

                @foreach($hotThreads as $hotThread)
    			<div class="col-md-1"></div>
    			<div class="thread col-md-11">
    				<div class="col-md-12">
    					<p><b>{{$hotThread->title}}</b></p>
    				</div>
    				<div class="col-md-12">
    					<p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{User::find($hotThread->user_id)->name}}</p>
    				</div>
    			</div>
                @endforeach
    		</div>