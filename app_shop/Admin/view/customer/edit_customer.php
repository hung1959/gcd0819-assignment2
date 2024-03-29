<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit Customer</title>

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
		<h1 class="text-center" style="font-weight: bold; color: #bc2005;">EDIT CUSTOMER</h1>
		<form action="" method="POST" role="form" enctype="multipart/form-data">	
			<div class="form-group">
				<input type="hidden" name="customerid" value="<?php echo $customer['customerid']; ?>">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control" id="" placeholder="Email" value="<?php echo $customer['email'] ?>">
				<label for="">First Name</label>
				<input type="text" name="firstname" class="form-control" id="" placeholder="First Name" value="<?php echo $customer['firstname']; ?>">
				<label for="">Last Name</label>
				<input type="text" name="lastname" class="form-control" id="" placeholder="Last Name" value="<?php echo $customer['lastname']; ?>">

				<label for="">Password</label>
				<input type="password" name="password" class="form-control" id="" placeholder="Password" value="<?php echo $customer['password'] ?>">
				<br>
			</div>
			<button type="submit" name="action" value="update_customer" class="btn btn-primary">Update Customer</button>
		</form>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>