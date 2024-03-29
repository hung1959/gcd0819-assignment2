<?php
	function get_products(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM products ORDER BY productid";
		try {
			$statement = $db->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}
	function add_product($productname,$price,$description,$image,$by_user){
		$db = getDB();
		$query="INSERT INTO products(productname,price,description,image,by_user)
				VALUES (?,?,?,?,?)";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$productname);
			$statement->bindParam(2,$price);
			$statement->bindParam(3,$description);
			$statement->bindParam(4,$image);
			$statement->bindParam(5,$by_user);
			$statement->execute();
			$statement->closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message;
		}
	}
	function delete_product($productid){
		$db=getDB();//connect to database
		$query ="DELETE FROM products
				 WHERE productid=?";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$productid);//Use paramater
			$statement->execute();
			$statement->closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

	function update_product($productid,$productname,$price,$description,$image,$by_user){
		$db=getDB();
		$query="UPDATE products
				SET productname=?, price=?, description=?, image=?, by_user=?
				WHERE productid=?";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$productname);
			$statement->bindParam(2,$price);
			$statement->bindParam(3,$description);
			$statement->bindParam(4,$image);
			$statement->bindParam(5,$by_user);
			$statement->bindParam(6,$productid);
			$statement->execute();
			$statement->closeCursor();		

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}
	function get_product_by_id($productid){
		$db=getDB();
		$query="SELECT * FROM products
				WHERE productid=?";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$productid);
			$statement->execute();
			$result=$statement->fetch();
			$statement->closeCursor();
			return $result;			
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}
	function search_product($search_value){
		$db=getDB();
		$search_value="%".$search_value."%";
		$query="SELECT * FROM products
				WHERE productname LIKE ?";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$search_value);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

?>