<?php
//---- Includes db parameters.
include('db.php');

// Test by SAM
//--- Sample class to create connection using PDO
class db {
	var $conn;	
	
	function __construct(){
		$this -> conn = new PDO('mysql:host='.SERVER.'; dbname='.DATABASE, USERNAME, PASSWORD) or die(mysql_error());
	}
}

$db = new db();

?>