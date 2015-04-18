@extends('tampilan/index')

@section('content')
{{HTML::style('assets/css/styles.css')}}
{{HTML::style('assets/css/font-awesome.min.css')}}
@include('tampilan/profil-header')

<div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">

            <section class="threads section">
            	<div class="section-inner">
            		<h2 class="heading">Threads</h2>
            		<div class="content">
            			@foreach($questions as $question)
                    {{$question->title}}
                    @endforeach
            		</div>
            	</div>
            </section>

            <section class="latest section">
            	<div class="section-inner">
            		<h2 class="heading">Tutorial</h2>
            		<div class="content">

            			<div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-5.png" alt="project name">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Atom - Designed for Mobile Apps</a></h3>
                                    <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div><!--//desc-->                          
                            </div>

                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-5.png" alt="project name">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Atom - Designed for Mobile Apps</a></h3>
                                    <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div><!--//desc-->                          
                            </div>
            		</div>
            	</div>
            </section>
            <div>
                
                <div>
                    <h5>Questions</h5>
                    @foreach($questions as $question)
                    {{$question->title}}
                    @endforeach
                </div>
                <div>
                    <h5>Tutorial</h5>
                    @foreach($tutorials as $tutorial)
                    {{$tutorial->title}}
                    @endforeach
                </div>
            </div>

                @include('tampilan/profil-aboutme')
    
               <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Latest Projects</h2>
                        <div class="content">    
                                               
                            <div class="item featured text-center">
                                <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/" target="_blank">KickStarter - Velocity</a></h3>
                                <p class="summary">A responsive Bootstrap template designed for digital products</p>
                                <div class="featured-image">
                                    <a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/" target="_blank">
                                    <img class="img-responsive project-image" src="assets/images/projects/project-featured.png" alt="project name">
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                        </div>
                                    </div>
                                    
                                <div class="desc text-left">                                    
                                    <p>You can promote your main project here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                                </div><!--//desc-->         
                                <a class="btn btn-cta-secondary" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/" target="_blank"><i class="fa fa-thumbs-o-up"></i> Back my project</a>                 
                            </div><!--//item-->
                            <hr class="divider">
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-5.png" alt="project name">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Atom - Designed for Mobile Apps</a></h3>
                                    <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-4.png" alt="project name">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">DevStudio - Designed for Web Development Agencies</a></h3>
                                    <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-1.png" alt="project name">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank">Tempo - Designed for Startups</a></h3>
                                    <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->                            
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-2.png" alt="project name">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank">Delta - Designed for Mobile Apps</a></h3>
                                    <p> You can put one of your secondary projects here. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                                    <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
                <section class="projects section">
                    <div class="section-inner">
                        <h2 class="heading">Other Projects</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><a href="#">Project Title Cras Lacus</a></h3>
                                <p class="summary">Provide a brief description of your project. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatu.</p>
                                <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="#">Project Title Cras eget lacus</a> <span class="label label-theme">Open Source</span></h3>
                                <p class="summary">Provide a brief description of your project. Maecenas ornare ultricies risus, in fermentum augue consectetur in. Vestibulum vitae mauris iaculis, sollicitudin velit in, molestie nulla. </p>
                                <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="#">Project Title Maecenas Ornare</a> <span class="label label-theme">Open Source</span></h3>
                                <p class="summary">Provide a brief description of your project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel purus enim. Etiam tortor felis, fermentum ac ultrices sed.</p>
                                <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a></p>
                            </div><!--//item-->
                            
                            <a class="btn btn-cta-secondary" href="#">More on CoderWall <i class="fa fa-chevron-right"></i></a>
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Co-Founder &amp; Lead Developer - <span class="place"><a href="#">Startup Hub</a></span> <span class="year">(2014 - Present)</span></h3>
                                <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Software Engineer - <span class="place"><a href="#">Google</a></span> <span class="year">(2013 - 2014)</span></h3>
                                <p>Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                            </div><!--//item-->
                            
                            <div class="item">
                                <h3 class="title">Software Engineer - <span class="place"><a href="#">eBay</a></span> <span class="year">(2012 - 2013)</span></h3>
                                <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                            </div><!--//item-->
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                <!--//Github-->
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>San Francisco, US</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="#">jameslee@website.com</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">http://www.website.com</a></li>

                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            <p class="intro">
                                Intro about your skills goes here. Keep the list lean and only show your primary skillset. You can always provide a link to your Linkedin or Coderwall profile so people can get more info there.</p>
                            
                            <div class="skillset">
                               
                                <div class="item">
                                    <h3 class="level-title">Python &amp; Django<span data-original-title="You can use the tooltip to add more info..." class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="">Expert</span></h3>
                                    <div class="level-bar">
                                        <div style="width: 96%;" class="level-bar-inner" data-level="96%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Javascript &amp; jQuery<span title="" data-original-title="" class="level-label">Expert</span></h3>
                                    <div class="level-bar">
                                        <div style="width: 96%;" class="level-bar-inner" data-level="96%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">HTML5, CSS3, SASS &amp; LESS<span title="" data-original-title="" class="level-label">Expert</span></h3>
                                    <div class="level-bar">
                                        <div style="width: 96%;" class="level-bar-inner" data-level="96%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Ruby on Rails<span title="" data-original-title="" class="level-label">Pro</span></h3>
                                    <div class="level-bar">
                                        <div style="width: 85%;" class="level-bar-inner" data-level="85%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Coderwall</a></p> 
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->
                
                <aside class="testimonials aside section">
                    <div class="section-inner">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">                                  
                                    <p><i class="fa fa-quote-left"></i>James is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                </blockquote>                
                                <p class="source"><span class="name">Tim Adams</span><br><span class="title">Curabitur commodo</span></p>                                                             
                            </div><!--//item-->
                            
                            <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Linkedin</a></p> 
                            
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Education</h2>
                        <div class="content">
                            <div class="item">                      
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> MSc Psychology and Computer Science</h3>
                                <h4 class="university">University College London <span class="year">(2011-2012)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> BSc Computer Science</h3>
                                <h4 class="university">University of Bristol <span class="year">(2008-2011)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                            
                           
                
               
                
              
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div>
<script src="{{URL::asset('asset/js/profile.js')}}"></script>
@stop