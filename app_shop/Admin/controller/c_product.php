<?php
	include_once('../model/database_shop.php');
	include_once('../model/m_product.php');
		
	$action =  filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action=filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = "list_products";
		}
	}
	switch ($action) {
		case 'list_products':
			$list_products = get_products();
			include('../view/product/list_products.php');
			break;
		case 'form_add_new':
			include('../view/product/add_product.php');
			break;
		case 'add_product':
			//Get data from product_form
			$productname=filter_input(INPUT_POST, 'productname');
			$price=filter_input(INPUT_POST, 'price');
			$description=filter_input(INPUT_POST, 'description');
			$image =filter_input(INPUT_POST, 'image');
			$by_user = filter_input(INPUT_POST, 'by_user');
			//call function add_product
			add_product($productname,$price,$description,$image,$by_user);
			$list_products = get_products();
			include('../view/product/list_products.php');
			break;
		case 'delete':
			$productid = filter_input(INPUT_GET, 'productid');
			delete_product($productid);
			$list_products = get_products();
			include('../view/product/list_products.php');
			break;
		case 'edit':
			$productid = filter_input(INPUT_GET, 'productid');
			$product = get_product_by_id($productid);
			include('../view/product/edit_product.php');
			break;
		case 'update_product':
			//Get data from product_form
			$productid = filter_input(INPUT_POST, 'productid');
			$productname=filter_input(INPUT_POST, 'productname');
			$price=filter_input(INPUT_POST, 'price');
			$description=filter_input(INPUT_POST, 'description');
			$image =filter_input(INPUT_POST, 'image');
			$by_user = filter_input(INPUT_POST, 'by_user');

			update_product($productid,$productname,$price,$description,$image,$by_user);			
			$list_products = get_products();

			include('../view/product/list_products.php');
			break;
		default:
			# code...
			break;
	}
?>