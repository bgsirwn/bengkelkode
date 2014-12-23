<?
session_start();
date_default_timezone_set("UTC");
class KoneksiDatabase{
	public $host = 'localhost';
	public $usr = 'root';
	public $pass = 'root';
	public $database = 'sahabatkantong';
}

//sistem
require 'classes/Sistem.php';

//database
require 'databases/UserTable.php';
require 'databases/PengeluaranTable.php';
require 'databases/PemasukanTable.php';

?>