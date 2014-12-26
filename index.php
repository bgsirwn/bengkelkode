<?
require 'sistem/class_lib.php';
// $page='login';
// if(isset($_GET['page'])){
// 	$page = $_GET['page'];
// }
// $sistemUtama = new Sistem();
// $src = 'tampilan/page/'.strtolower($page).".php";
// if (file_exists($src)) {
// 	require $src;
// }
// else{
// 	echo "We're very sorry. The page you requested doesn't exist! Back to <a href='?page=home'>home</a>.";
// }

$sistemUtama = new Sistem();

$url = 'home';

if(isset($_GET['url'])){
	$url = $_GET['url'];
}

$routers = array(
	array(
		'id' => 'hello',
		'call' => 'LoginController@hello'
	),
	array(
		'id' => 'aku',
		'call' => 'TesController@showAku'
	),
	array(
		'id' => 'aku/contact',
		'call' => 'TesController@contactKu'
	),
	array(
		'id' => 'login',
		'call' => 'LoginController@showLogin'
	)
);

$sistemUtama->routing($routers, $url);
?>