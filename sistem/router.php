<?php
Sistem::addRouting($routers,'404', 'TesController@404');
Sistem::addRouting($routers,'home','TesController@home');
Sistem::addRouting($routers,'hello','LoginController@hello');
Sistem::addRouting($routers,'aku','TesController@showAku');
Sistem::addRouting($routers,'aku/contact','TesController@contactKu');
Sistem::addRouting($routers,'login','LoginController@showLogin');
Sistem::addRouting($routers,'login/auth', 'LoginController@auth');
Sistem::addRouting($routers,'logout', 'TesController@logout');
?>