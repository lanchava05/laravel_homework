<?php 
	require_once("db.php");
	$sql="SELECT * FROM `products`";
	$result=$conn->query($sql);
	// var_dump($result);
	while ($row = $result->fetch_assoc()) {
		echo $row["product_name"]." ".$row["description"]."<br>";
	}
	
?>
