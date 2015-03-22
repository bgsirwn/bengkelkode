<section class="about section">
    <div class="section-inner">
        <h2 class="heading">About Me 
        	</h2>
        	@if(Auth::check() && (Auth::user()->username == $output->username))
        	<div id="about-me-control">
        		<span id="about-me-edit-button" class="glyphicon glyphicon-pencil"></span>
        	</div>
        	@endif
            <div id="about-me-content" class="content">{{$output->bio}}</div>
     </div><!--//section-inner-->                 
</section><!--//section-->