<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container card mt-4">
		<form method="POST" action="add_product.php">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Product Name</label>
		    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Product" name="product_name">
		    
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Description</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Description" name="description">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Add Product</button>
		</form>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
</body>
</html>