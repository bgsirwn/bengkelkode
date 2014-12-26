<?php
Sistem::addRouting($routers,'home','TesController@home');
Sistem::addRouting($routers,'hello','LoginController@hello');
Sistem::addRouting($routers,'aku','TesController@showAku');
Sistem::addRouting($routers,'aku/contact','TesController@contactKu');
Sistem::addRouting($routers,'login','LoginController@showLogin');
?>