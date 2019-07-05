<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>List Of Customers</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style>
			body{
				padding-top: 50px;
				width: 90%;
				margin: 0 auto;
			}
			.table thead tr th{
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
		<h1 class="text-center" style="font-weight: bold; color: #bc2005;">Customers List</h1>
		<form action="" method="POST" role="form">
			<button type="submit" class="btn btn-default" name="action" value="form_add_new">Add New Customer</button>
		</form>
		
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Customer ID</th>
					<th>Email</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Street</th>
					<th>City</th>
					<th>State</th>
					<th>Zip</th>
					<th>Phone</th>
					<th>Password</th>
					<th colspan="2">Actions</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($list_customers as $key => $value):?>
				<tr>
					<td><?php echo $value['customerid']; ?></td>
					<td><?php echo $value['email']; ?></td>
					<td><?php echo $value['firstname']; ?></td>
					<td><?php echo $value['lastname']; ?></td>
					<td><?php echo $value['street']; ?></td>
					<td><?php echo $value['city']; ?></td>
					<td><?php echo $value['state']; ?></td>
					<td><?php echo $value['zip']; ?></td>
					<td><?php echo $value['phone']; ?></td>
					<td>******</td>
					<td><a href="?action=edit&customerid=<?php echo $value['customerid'];?>">Edit</a></td>
					<td><a href="?action=delete&customerid=<?php echo $value['customerid'];?>">Delete</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>