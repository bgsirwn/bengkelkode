{{HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js')}}
{{HTML::script('asset/js/jquery.tagsinput.js')}}
{{HTML::style('asset/css/custom.css')}}
{{HTML::style('asset/css/jquery.tagsinput.css')}}


<script type="text/javascript">

        function onAddTag(tag) {
            alert("Added a tag: " + tag);
        }
        function onRemoveTag(tag) {
            alert("Removed a tag: " + tag);
        }

        function onChangeTag(input,tag) {
            alert("Changed a tag: " + tag);
        }

        $(function() {

            $('#tag').tagsInput({width:'auto'});
        });

    </script>

<div class="post">
    {{Form::open(array('url'=>isset($thread) ? route('{username}.thread.update', [Auth::user()->username,$thread->id]):route('{username}.thread.store',[Auth::user()->username]),'class'=>'form newtopic','method'=>isset($thread) ? 'put':'post'))}}
        <div class="topwrap">
            <div class="userinfo pull-left">
                <div class="status red">&nbsp;</div>
                    <div class="avatar">
                        <img src="{{URL::to('dist/images/'.User::find(Auth::id())->photo)}}" alt="{{User::find(Auth::id())->username}}">
                </div>
                
                <div class="icons">
                    <img src="http://localhost/bengkelkoding/public/dist/images/icon3.jpg" alt=""><img src="http://localhost/bengkelkoding/public/asset/img/photo-2.jpg" alt=""><img src="http://localhost/bengkelkoding/public/dist/images/icon5.jpg" alt=""><img src="http://localhost/bengkelkoding/public/dist/images/icon6.jpg" alt="">
                </div>
            </div>
            
            <div class="posttext pull-left">
                <div>
                    {{Form::text('title',isset($thread) ? $thread->title : '',array('placeholder'=>'Title','class'=>'form-control','required'))}}
                        <!--
                            <input placeholder="Enter Topic Title" class="form-control" type="text">
                            -->
                </div>
    
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        {{Form::radio('type', '1', true)}}Question
                        {{Form::radio('type', '2')}}Discussion
                                                <!--
                                                    <select name="category" id="category" class="form-control">                                                     
                                                        <option value="" disabled="disabled" selected="selected">Select Category</option>
                                                        <option value="op1">Option1</option>
                                                        <option value="op2">Option2</option>
                                                    </select>
                                                    -->
                </div>

                <div class="col-lg-6 col-md-12">
                    <span>Categories</span>
                    @foreach($categories as $category)
                    {{Form::radio('category',$category->id)}}{{$category->name}}
                    @endforeach
                </div>

                <div class="col-md-12" style="margin-bottom: 20px">
                    <p><label>Tags:</label></p>
                    <input name="tag" id="tag" type="text" class="tags" value=""  />
                </div>
            </div>

            <div>
                {{Form::textarea('thread',isset($thread) ? $thread->thread:'',array('class'=>'form-control'))}}
                    
                                                <!--
                                                <textarea name="desc" id="desc" placeholder="Description" class="form-control"></textarea>
                                                -->
            </div>
                                            
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
            
                <div>
                    {{View::make('recaptcha::display')}}
                </div>                            
            </div>
            
            <div class="clearfix"></div>
        </div>                              
        
        <div class="postinfobot">
            <div class="notechbox pull-left">
                <input name="note" id="note" class="form-control" type="checkbox">
            </div>

            <div class="pull-left">
                <label for="note"> Email me when some one post a reply</label>
            </div>
                                        
            <div class="pull-right postreply">                      
                <div class="pull-left smile"><a href="#"><i class="icon-smile"></i></a></div>
                {{Form::submit('submit', array('class'=>'primary large'))}}
                                            <!--
                                            <div class="pull-left"><button type="submit" class="btn btn-primary">Post</button></div>
                                            -->
                <div class="clearfix"></div>
            </div>


            <div class="clearfix"></div>
        </div>
    </div>
                                
</div>

{{Form::close()}}