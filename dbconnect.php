<?php 
	
	$host='localhost';
	$username='root';
	$pass='vijay';
	$db='amazekart';

	$conn=mysqli_connect($host,$username,$pass,$db);

	if(!$conn) die("Connection refused").mysql_connect_error();
 ?>