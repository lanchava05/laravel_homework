<?php
	require_once("db.php");
	if (isset($_POST['product_name'],$_POST['description'])) {
		$product_name=mysqli_real_escape_string($conn,$_POST["product_name"]);
		$description=mysqli_real_escape_string($conn,$_POST["description"]);
		//$sql="SELECT * FROM `products` WHERE `product_name`='$product_name' AND `description`='$description'";
		$sql="INSERT INTO `products`(`product_name`, `description`) VALUES ('$product_name','$description')";
		$conn->query($sql);
		//es nawili aghar ginda insertis dros eg gamotanaa axla eseve sheitansda shegidzlia ifit seamowmo mere nu egac weria kodshi insert.phpshi mara gavtestot prosta sheaqvs tu ara
/*
		while ($row = $result->fetch_assoc()) {
			echo $row["product_name"]." ".$row["description"]."<br>";
		}*/
	}


 ?>