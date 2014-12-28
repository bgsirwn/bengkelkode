<?
session_start();
date_default_timezone_set("UTC");
class KoneksiDatabase{
	public $host = 'localhost';
	public $usr = 'root';
	public $pass = 'root';
	public $database = 'bengkelcoding';
}

//sistem
require 'classes/Sistem.php';
require 'classes/Tampilan.php';

//controller
require 'controller/LoginController.php';
require 'controller/GlobalController.php';
require 'controller/SignupController.php';
require 'controller/PostController.php';
require 'controller/DiscoverController.php';

//database
require 'databases/UserTable.php';
require 'databases/ThreadTable.php';

//router
require 'router.php';
?>