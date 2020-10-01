<?php
	require_once("db.php");
	$sql="INSERT INTO `users`('id', `name`, `password`) 
	VALUES ('22','admin','pwd')";
	if ($conn->quary($sql) === TRUE) {
		echo "success";
	}
	else{
		echo "error". $conn->error;
	}
?>