<?php
	require_once("db.php");
		if (isset($_GET["product_name"],$_GET["description"])) {
		$product_name=mysqli_real_escape_string($conn,$_GET["product_name"]);
		$product_name=mysqli_real_escape_string($conn,$_GET["description"]);
		$sql="INSERT INTO `products`(`product_name`, `description`) 
		VALUES ('$product_name','$product_name')";
		if($conn->query($sql)===TRUE){
			echo "success";
		}
		else{
			echo "Error:". $conn->error;
		}
	}


?>