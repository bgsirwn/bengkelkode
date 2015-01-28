<div class="post">
    {{Form::open(array('class'=>'form'))}}
                                    <div class="topwrap">
                                        <div class="userinfo pull-left">
                                            <div class="avatar">
                                               <img class="cycle span" src="{{URL::asset('dist/images/'.User::find(Auth::id())->photo)}}" style="width: 50px ! important;">
                                                <div class="status red">&nbsp;</div>
                                            </div>

                                            <div class="icons">
                                                <img src="images/icon3.jpg" alt=""><img src="images/icon4.jpg" alt=""><img src="images/icon5.jpg" alt=""><img src="images/icon6.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="posttext pull-left">
                                            <div class="textwraper">
                                                <div class="postreply">Post a Reply</div>
                                               {{Form::textarea('answer','')}}
                                                
                                                {{View::make('recaptcha::display')}}
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                        </div>
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
                                            {{Form::submit('Post', array('class'=>'success'))}}
                                            <!--
                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Post Reply</button></div>
                                            -->
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                    {{form::close()}}
</div>
