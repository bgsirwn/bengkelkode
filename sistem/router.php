<?php
Sistem::addRouting($routers,'404', 'GlobalController@404');

Sistem::addRouting($routers,'home', function(){
	Tampilan::show('home');
});

Sistem::addRouting($routers,'hello','LoginController@hello');

Sistem::addRouting($routers,'aku','GlobalController@showAku');

Sistem::addRouting($routers,'aku/contact','GlobalController@contactKu');

Sistem::addRouting($routers,'login','LoginController@show');

Sistem::addRouting($routers,'signup','SignupController@show');

Sistem::addRouting($routers,'signup/auth','SignupController@signMeUp');

Sistem::addRouting($routers,'login/auth', 'LoginController@auth');

Sistem::addRouting($routers,'logout', 'GlobalController@logout');

Sistem::addRouting($routers,'post', 'PostController@show');

Sistem::addRouting($routers,'discover', "DiscoverController@show");

Sistem::addRouting($routers,'tes',function(){
	echo "Laravel emang top banget!";
});

?>