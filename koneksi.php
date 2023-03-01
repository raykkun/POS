<?php 
$server = "localhost";
$user 	= "root";
$pass 	= "";
$dbname = "db_toko";

$conn = mysqli_connect($server, $user, $pass, $dbname);
if(!$conn){
	die("Connection Failed: " .mysqli_connect_error());
} 

?>
