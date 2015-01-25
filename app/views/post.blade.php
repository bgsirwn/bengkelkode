<div class="post">
				{{Form::open(array('class'=>'form newtopic'))}}
                    <div class="topwrap">
                        <div class="userinfo pull-left">
                    	    <div class="avatar">
                                <img class="cycle span" src="http://localhost/bengkelkoding/public/dist/images/pp_blank.jpeg" style="width: 50px ! important;">
                        	    <div class="status red">&nbsp;</div>
                            </div>

                            <div class="icons">
                            	<img src="Forum%20%20%20New%20topic_files/icon3.jpg" alt=""><img src="Forum%20%20%20New%20topic_files/icon4.jpg" alt=""><img src="Forum%20%20%20New%20topic_files/icon5.jpg" alt=""><img src="Forum%20%20%20New%20topic_files/icon6.jpg" alt="">
                            </div>
                        </div>
                    <div class="posttext pull-left">
                        <div>
                        {{Form::text('title','',array('placeholder'=>'Title','class'=>'form-control','required'))}}
                        <!--
                            <input placeholder="Enter Topic Title" class="form-control" type="text">
                            -->
                        </div>
                             <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                {{Form::select('type', array('1'=>'Question', '2'=>'Discussion'), array('class'=>'form-control', 'id'=>'category'))}}
                                                <!--
                                                    <select name="category" id="category" class="form-control">                                                  	
                                                        <option value="" disabled="disabled" selected="selected">Select Category</option>
                                                        <option value="op1">Option1</option>
                                                        <option value="op2">Option2</option>
                                                    </select>
                                                    -->
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                {{Form::select('tag', array('1'=>'java','2'=>'php','3'=>'javascript'), array('class'=>'form-control', 'id'=>'subcategory'))}}
                                                <!--
                                                    <select name="subcategory" id="subcategory" class="form-control">
                                                        <option value="" disabled="disabled" selected="selected">Select Subcategory</option>
                                                        <option value="op1">Option1</option>
                                                        <option value="op2">Option2</option>
                                                    </select>
                                                    -->
                                                </div>
                                            </div>

                                            <div>

                                            	{{Form::textarea('thread','',array('class'=>'form-control'))}}
													<script>
														CKEDITOR.replace( 'thread', {
														    language: 'id',
														    uiColor: 'whitesmoke'
														});
													</script>

												<!--
                                                <textarea name="desc" id="desc" placeholder="Description" class="form-control"></textarea>
                                            	-->
                                            </div>
                                            <!--
                                            <div class="row newtopcheckbox">
                                                <div class="col-lg-6 col-md-6">
                                                    <div><p>Who can see this?</p></div>
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
                                                        <p>Share on Social Networks</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input id="fb" type="checkbox"> <i class="fa fa-facebook-square"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input id="tw" type="checkbox"> <i class="fa fa-twitter"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input id="gp" type="checkbox"> <i class="fa fa-google-plus-square"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
			-->
										<div>
											{{View::make('recaptcha::display')}}
										</div>
										
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>                              
                                    <div class="postinfobot">
<!--
                                        <div class="notechbox pull-left">
                                            <input name="note" id="note" class="form-control" type="checkbox">
                                        </div>

                                        <div class="pull-left">
                                            <label for="note"> Email me when some one post a reply</label>
                                        </div>
                                        -->
                                        <div class="pull-right postreply">
                                        <!--
                                            <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                            -->
                                            {{Form::submit('submit', array('class'=>'primary large'))}}
                                            <!--
                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Post</button></div>
                                            -->
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                
                            </div>

{{Form::close()}}