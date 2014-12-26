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
require 'classes/LoginController.php';
require 'classes/TesController.php';

//database
require 'databases/UserTable.php';
require 'databases/PengeluaranTable.php';
require 'databases/PemasukanTable.php';

?>