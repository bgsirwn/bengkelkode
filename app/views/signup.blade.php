@extends('default')
@section('title')
	{{"Bengkel Koding::Sign up"}}
@stop
@section('content')
	
<section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">Create New account</a> 
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <!-- POST -->
                            <div class="post">
                                <form action="#" class="form newtopic" method="post">
                                    <div class="postinfotop">
                                        <h2>Create New Account</h2>
                                    </div>

                                    <!-- acc section -->
                                    <div class="accsection">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left"><h3>Required Fields</h3></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">
                                                <div class="avatar">
                                                    <img src="http://localhost/bengkelkoding/public/dist/images/avatar-blank.jpg" alt="">
                                                    <div class="status green">&nbsp;</div>
                                                </div>
                                                <div class="imgsize">60 x 60</div>
                                                <div>
                                                    <button class="btn">Add</button>
                                                </div>
                                            </div>
                                            <div class="posttext pull-left">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <input placeholder="First Name" class="form-control" type="text">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input placeholder="Last Name" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div>
                                                    <input placeholder="User Name" class="form-control" type="text">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <input placeholder="Password" class="form-control" id="pass" name="pass" type="password">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input placeholder="Retype Password" class="form-control" id="pass2" name="pass2" type="password">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->



                                    <!-- acc section -->
                                    <div class="accsection privacy">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left"><h3>Privacy</h3></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left">

                                                <div class="row newtopcheckbox">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div><p>Who can see my Profile?</p></div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input id="everyone" type="checkbox"> Everyone
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input id="friends" type="checkbox"> Only Friends
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div>
                                                            <p>Share posts on Social Networks</p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-4">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input id="fb" type="checkbox"> <i class="icon-facebook"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-4">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input id="tw" type="checkbox"> <i class="icon-twitter"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-4">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input id="gp" type="checkbox"> <i class="icon-google-plus"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->



                                    <!-- acc section -->
                                    <div class="accsection survey">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left">
                                                <div class="htext">
                                                    <h3>Small Survey ( Optional )</h3>
                                                </div>
                                                <div class="hnotice">
                                                    Answer this survey and Earn this Badge : <img src="http://localhost/bengkelkoding/public/dist/images/icon5.jpg" alt="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left">

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="old" id="old" class="form-control">
                                                            <option value="" disabled="disabled" selected="selected">How Old are you?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="who" id="who" class="form-control">
                                                            <option value="" disabled="disabled" selected="selected">Who are you?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="help" id="help" class="form-control">
                                                            <option value="" disabled="disabled" selected="selected">Will you help others here?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <select name="hear" id="hear" class="form-control">
                                                            <option value="" disabled="disabled" selected="selected">Where do you hear about us?</option>
                                                            <option value="op1">Option1</option>
                                                            <option value="op2">Option2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row newtopcheckbox">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div><p>Some other question 1</p></div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input id="everyone2" type="checkbox"> option 1 
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input id="friends2" type="checkbox"> option 2 
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div>
                                                            <p>Some other question 2</p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input id="fb2" type="checkbox"> option 1 
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input id="tw2" type="checkbox"> option 2 
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->





                                    <!-- acc section -->
                                    <div class="accsection networks">
                                        <div class="acccap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left">
                                                <div class="htext">
                                                    <h3>Social Networks ( Optional )</h3>
                                                </div>
                                                <div class="hnotice">
                                                    Link Social Networks and Earn this Badge : <img src="http://localhost/bengkelkoding/public/dist/images/icon6.jpg" alt="">
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="topwrap">
                                            <div class="userinfo pull-left">&nbsp;</div>
                                            <div class="posttext pull-left">

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <button class="btn btn-fb">Link Facebook Account</button>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <button class="btn btn-tw">Link Twitter Account</button>                                                       
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <button class="btn btn-gp">Link Google + Account</button>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <button class="btn btn-pin">Link Pinterest Account</button>                                                       
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>  
                                    </div><!-- acc section END -->





                                    <div class="postinfobot">

                                        <div class="notechbox pull-left">
                                            <input name="note" id="note" class="form-control" type="checkbox">
                                        </div>

                                        <div class="pull-left lblfch">
                                            <label for="note"> I agree with the Terms and Conditions of this site</label>
                                        </div>

                                        <div class="pull-right postreply">
                                            <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Sign Up</button></div>
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div><!-- POST -->






                        </div>
                        <div class="col-lg-4 col-md-4">

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Categories</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <ul class="cats">
                                        <li><a href="#">Trading for Money <span class="badge pull-right">20</span></a></li>
                                        <li><a href="#">Vault Keys Giveway <span class="badge pull-right">10</span></a></li>
                                        <li><a href="#">Misc Guns Locations <span class="badge pull-right">50</span></a></li>
                                        <li><a href="#">Looking for Players <span class="badge pull-right">36</span></a></li>
                                        <li><a href="#">Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a></li>
                                        <li><a href="#">Video &amp; Audio Drivers <span class="badge pull-right">11</span></a></li>
                                        <li><a href="#">2K Official Forums <span class="badge pull-right">5</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Poll of the Week</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <p>Which game you are playing this week?</p>
                                    <form action="#" method="post" class="form">
                                        <table class="poll">
                                            <tbody><tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                            Call of Duty Ghosts
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt1" name="opt" value="1" type="radio">  
                                                    <label for="opt1"></label>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                                            Titanfall
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt2" name="opt" value="2" checked="checked" type="radio">  
                                                    <label for="opt2"></label>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                            Battlefield 4
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="chbox">
                                                    <input id="opt3" name="opt" value="3" type="radio">  
                                                    <label for="opt3"></label>  
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </form>
                                    <p class="smal">Voting ends on 19th of October</p>
                                </div>
                            </div>

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>My Active Threads</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">This Dock Turns Your iPhone Into a Bedside Lamp</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Who Wins in the Battle for Power on the Internet?</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Sony QX10: A Funky, Overpriced Lens Camera for Your Smartphone</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">FedEx Simplifies Shipping for Small Businesses</a>
                                </div>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <a href="#">Loud and Brave: Saudi Women Set to Protest Driving Ban</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>



                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12">
                            <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                            <div class="pull-left">
                                <ul class="paginationforum">
                                    <li class="hidden-xs"><a href="#">1</a></li>
                                    <li class="hidden-xs"><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#" class="active">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li class="hidden-xs"><a href="#">9</a></li>
                                    <li class="hidden-xs"><a href="#">10</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                                    <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                                    <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                                    <li><a href="#">1586</a></li>
                                </ul>
                            </div>
                            <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </section>













































<!--
	<script type="text/javascript" src="dist/js/jquery/jquery.validate.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#signup-form").validate({
			    rules:{ name:"required",
			            umur:{required:true,number: true},     
			            username:"required",
			            password:{required: true,minlength:6},     
			            //cpassword:{required: true,equalTo: "#password"},
			            email:{required:true,email:true},
			          },
			    messages:{
			            name:{required:'Nama harus di isi'},
			            umur:{
			                required:'Umur harus di isi',
			                number  :'Hanya boleh di isi Angka'},
			            username: {
			                required:'Username harus di isi'},
			            password: {
			                required :'Password harus di isi',
			                minlength:'Password minimal 5 karakter'},
			            //cpassword: {
			             //   required:'Ulangi Password harus di isi',
			             //   equalTo :'Isinya harus sama dengan Password'},
			            email: {
			                required:'Email harus di isi',
			                email   :'Email harus valid'},
			            
			     success: function(label) {
			        label.text('OK!').addClass('valid');}
			    });
			});
	</script>

	<div class="container">
		<div class="grid">
			<div class="row">

				<div class="span4">
					
				</div>

				<div class="span6" style="margin-top: 100px; margin-bottom:100px">
					<div style="background-color:#E03131; padding:30px; width:80%">
						<h2>
							<span class="icon-user" style="margin-right:5px; margin-left:10px"></span>
							Sign Up
						</h2>
						{{Form::open(array('class'=>'form-horizontal', 'id'=>'signup-form'))}}
							<div class="form-group input-control text" data-role="input-control" style="margin:5px">
								
								{{Form::text('name',Input::old('name'),array('class'=>'form-control','placeholder'=>'name','required'))}}
								<button type="button" class="btn-clear" tabindex="-1"></button>	
							</div>

							{{$errors->first('username')}}
							<div class="form-group input-control text" data-role="input-control" style="margin:5px">
								
								{{Form::text('username',Input::old('username'),array('class'=>'form-control', 'placeholder'=>'username','required'))}}
								<button type="button" class="btn-clear" tabindex="-1"></button>
							</div>
							{{$errors->first('email')}}		
							<div class="form-group input-control text" data-role="input-control" style="margin:5px">
								
								{{Form::email('email',Input::old('email'),array('placeholder'=>'email', 'class'=>'form-control','required'))}}
								<button type="button" class="btn-clear" tabindex="-1"></button>
							</div>
							{{$errors->first('password')}}
							<div class="form-group input-control password" data-role="input-control" style="margin:5px">
								
								{{Form::password('password',array('placeholder'=>'password', 'class'=>'form-control','required'))}}
								<button type="button" class="btn-reveal" tabindex="-1"></button>
							</div>
							{{$errors->first('g-recaptcha-response')}}
							<div style="margin-top:20px;margin-bottom:20px;margin-left:5px">
							{{View::make('recaptcha::display')}}
							</div>
							<div class="form-group">
							{{Form::submit('Sign up', array('class'=>'primary','style'=>'margin:5px'))}}
							</div>
						{{Form::close()}}
					</div>

					<div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	-->	
@stop