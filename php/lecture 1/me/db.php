<?php
	$server="localhost";
	$username="root";
	$password="";
	$db="lecture_1";

	$conn= new mysqli($server,$username,$password,$db);
	if ($conn->connect_error) {
		die("connection filed");
	}


?>