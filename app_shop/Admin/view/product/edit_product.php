<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit product</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style>
			body{
				width: 50%;
				margin: 0 auto;
				padding-top: 50px;
			}
			label{
				color: #bc2005;
			}
		</style>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center" style="font-weight: bold; color: #bc2005;">EDIT PRODUCT</h1>
		<form action="" method="POST" role="form" enctype="multipart/form-data">	
			<div class="form-group">
				<input type="hidden" name="productid" value="<?php echo $product['productid']; ?>">
				<label for="">Product Name</label>
				<input type="text" name="productname" class="form-control" id="" placeholder="Product Name" value="<?php echo $product['productname'] ?>">
				<label for="">Price</label>
				<input type="text" name="price" class="form-control" id="" placeholder="Price" value="<?php echo $product['price']; ?>">
				<label for="">Description</label>
				<input type="text" name="description" class="form-control" id="" placeholder="Description" value="<?php echo $product['description']; ?>">

				<label for="">Image</label>
				<input type="text" name="image" class="form-control" id="" placeholder="Input image">
				<br>
				<label for="">by user</label>
				<input type="text" name="by_user" class="form-control" id="" readonly="readonly" value="admin" value="<?php echo $product['by_user']; ?>">
			</div>
			<button type="submit" name="action" value="update_product" class="btn btn-primary">Update product</button>
		</form>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>