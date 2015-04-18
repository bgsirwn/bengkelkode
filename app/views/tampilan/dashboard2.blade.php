@extends('tampilan/index')

@section('content')

{{HTML::style('assets/css/dashboard/dashboard.css')}}
{{HTML::style('assets/css/font-awesome.css')}}

@include('tampilan/navbar')

<div id="subnavbar-back">
  <div class="container">
    <div class="col-lg-12" id="subnavbar">
      <ul class="mainnav">
        <li class="active">
          <a href="index.html">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span> 
          </a> 
        </li>
        
        <li>
          <a href="reports.html">
            <i class="fa fa-user"></i>
            <span>Profile</span> 
          </a> 
        </li>

        <li class="subnavbar-open-right"><a href="guidely.html"><i class="fa fa-book"></i><span>Tutorial</span> </a></li>
        <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span> </a> </li>
        <li><a href="shortcodes.html"><i class="fa fa-code"></i><span>Shortcodes</span> </a> </li>
        <li class="dropdown subnavbar-open-right"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="fa fas.html">fa fas</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li class="subnavbar-open-right"><a href="pricing.html">Pricing Plans</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li class="subnavbar-open-right"><a href="error.html">404</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="container">

<div class="col-md-6">
  <div class="widget">
            <div class="widget-header"> <i class="fa fa-file"></i>
              <h3> Content</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <ul class="messages_layout">
                <li class="from_user left"> <a href="#" class="avatar"><img src="img/message_avatar1.png"></a>
                  <div class="message_wrap"> <span class="arrow"></span>
                    <div class="info"> <a class="name">John Smith</a> <span class="time">1 hour ago</span>
                      <div class="options_arrow">
                        <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" fa fa-caret-down"></i> </a>
                          <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                            <li><a href="#"><i class=" fa fa-share-alt fa fa-large"></i> Reply</a></li>
                            <li><a href="#"><i class=" fa fa-trash fa fa-large"></i> Delete</a></li>
                            <li><a href="#"><i class=" fa fa-share fa fa-large"></i> Share</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="text"> As an interesting side note, as a head without a body, I envy the dead. There's one way and only one way to determine if an animal is intelligent. Dissect its brain! Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor. </div>
                  </div>
                </li>
                <li class="by_myself right"> <a href="#" class="avatar"><img src="img/message_avatar2.png"></a>
                  <div class="message_wrap"> <span class="arrow"></span>
                    <div class="info"> <a class="name">Bender (myself) </a> <span class="time">4 hours ago</span>
                      <div class="options_arrow">
                        <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" fa fa-caret-down"></i> </a>
                          <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                            <li><a href="#"><i class=" fa fa-share-alt fa fa-large"></i> Reply</a></li>
                            <li><a href="#"><i class=" fa fa-trash fa fa-large"></i> Delete</a></li>
                            <li><a href="#"><i class=" fa fa-share fa fa-large"></i> Share</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="text"> All I want is to be a monkey of moderate intelligence who wears a suit… that's why I'm transferring to business school! I had more, but you go ahead. Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor. File not found. </div>
                  </div>
                </li>
                <li class="from_user left"> <a href="#" class="avatar"><img src="img/message_avatar1.png"></a>
                  <div class="message_wrap"> <span class="arrow"></span>
                    <div class="info"> <a class="name">Celeste Holm </a> <span class="time">1 Day ago</span>
                      <div class="options_arrow">
                        <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" fa fa-caret-down"></i> </a>
                          <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                            <li><a href="#"><i class=" fa fa-share-alt fa fa-large"></i> Reply</a></li>
                            <li><a href="#"><i class=" fa fa-trash fa fa-large"></i> Delete</a></li>
                            <li><a href="#"><i class=" fa fa-share fa fa-large"></i> Share</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="text"> And I'd do it again! And perhaps a third time! But that would be it. Are you crazy? I can't swallow that. And I'm his friend Jesus. No, I'm Santa Claus! And from now on you're all named Bender Jr. </div>
                  </div>
                </li>
                <li class="from_user left"> <a href="#" class="avatar"><img src="img/message_avatar2.png"></a>
                  <div class="message_wrap"> <span class="arrow"></span>
                    <div class="info"> <a class="name">Mark Jobs </a> <span class="time">2 Days ago</span>
                      <div class="options_arrow">
                        <div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" fa fa-caret-down"></i> </a>
                          <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
                            <li><a href="#"><i class=" fa fa-share-alt fa fa-large"></i> Reply</a></li>
                            <li><a href="#"><i class=" fa fa-trash fa fa-large"></i> Delete</a></li>
                            <li><a href="#"><i class=" fa fa-share fa fa-large"></i> Share</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="text"> That's the ONLY thing about being a slave. Now, now. Perfectly symmetrical violence never solved anything. Uh, is the puppy mechanical in any way? As an interesting side note, as a head without a body, I envy the dead. </div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /widget-content --> 
          </div>
</div>

  <div class="col-lg-4" id="widget">
    <div class="widget widget-nopad">
            <div class="widget-header"> <i class="fa fa-list-alt"></i>
              <h3> Notificasions</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <ul class="news-items">
                <li>
                  
                  <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Aug</span> </div>
                  <div class="news-item-detail"> <a href="http://www.egrappler.com/thursday-roundup-40/" class="news-item-title" target="_blank">Thursday Roundup # 40</a>
                    <p class="news-item-preview"> This is our web design and development news series where we share our favorite design/development related articles, resources, tutorials and awesome freebies. </p>
                  </div>
                  
                </li>
                <li>
                  
                  <div class="news-item-date"> <span class="news-item-day">15</span> <span class="news-item-month">Jun</span> </div>
                  <div class="news-item-detail"> <a href="http://www.egrappler.com/retina-ready-responsive-app-landing-page-website-template-app-landing/" class="news-item-title" target="_blank">Retina Ready Responsive App Landing Page Website Template – App Landing</a>
                    <p class="news-item-preview"> App Landing is a retina ready responsive app landing page website template perfect for software and application developers and small business owners looking to promote their iPhone, iPad, Android Apps and software products.</p>
                  </div>
                  
                </li>
                <li>
                  
                  <div class="news-item-date"> <span class="news-item-day">29</span> <span class="news-item-month">Oct</span> </div>
                  <div class="news-item-detail"> <a href="http://www.egrappler.com/open-source-jquery-php-ajax-contact-form-templates-with-captcha-formify/" class="news-item-title" target="_blank">Open Source jQuery PHP Ajax Contact Form Templates With Captcha: Formify</a>
                    <p class="news-item-preview"> Formify is a contribution to lessen the pain of creating contact forms. The collection contains six different forms that are commonly used. These open source contact forms can be customized as well to suit the need for your website/application.</p>
                  </div>
                  
                </li>
              </ul>
            </div>
            <!-- /widget-content --> 
          </div>
  </div>
</div>




@stop