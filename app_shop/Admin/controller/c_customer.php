<?php
	include_once('../model/database_shop.php');
	include_once('../model/m_customer.php');
		
	$action =  filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action=filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = "list_customers";
		}
	}
	switch ($action) {
		case 'list_customers':
			$list_customers = get_customers();
			include('../view/customer/list_customers.php');
			break;
		case 'form_add_new':
			include('../view/customer/add_customer.php');
			break;
		case 'add_customer':
			$email=filter_input(INPUT_POST, 'email');
			$firstname=filter_input(INPUT_POST, 'firstname');
			$lastname=filter_input(INPUT_POST, 'lastname');
			$password =filter_input(INPUT_POST, 'password');
			add_customer($email,$firstname,$lastname,$password);
			$list_customers = get_customers();
			include('../view/customer/list_customers.php');
			break;
		case 'delete':
			$customerid = filter_input(INPUT_GET, 'customerid');
			delete_customer($customerid);
			$list_customers = get_customers();
			include('../view/customer/list_customers.php');
			break;
		case 'edit':
			$customerid = filter_input(INPUT_GET, 'customerid');
			$customer = get_customer_by_id($customerid);
			include('../view/customer/edit_customer.php');
			break;
		case 'update_customer':
			$customerid = filter_input(INPUT_POST, 'customerid');
			$email=filter_input(INPUT_POST, 'email');
			$firstname=filter_input(INPUT_POST, 'firstname');
			$lastname=filter_input(INPUT_POST, 'lastname');
			$password =filter_input(INPUT_POST, 'password');
			update_customer($customerid,$email,$firstname,$lastname,$password);			
			$list_customers = get_customers();

			include('../view/customer/list_customers.php');
			break;
		default:
			# code...
			break;
	}
?>