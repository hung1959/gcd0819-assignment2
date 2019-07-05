<?php
	function check_login($email,$password){
		$db=getDB();//connect to db
		$query="SELECT * FROM customers WHERE email=? and password=?";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$email);
			$statement->bindParam(2,$password);
			$statement->execute();
			$result=$statement->fetchAll();
			$statement->closeCursor();
			if (!empty($result)) {
				return true;
			}
			else{
				return false;
			}
		} catch (PDOException $e) {
			$error_message=$e->getMessage();
			echo "Error execute query statement:" .$error_message;			
		}
	}
	function get_customers(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM customers ORDER BY customerid";
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
	function get_customer_by_id($customerid){
		$db=getDB();
		$query="SELECT * FROM customers
				WHERE customerid=?";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$customerid);
			$statement->execute();
			$result=$statement->fetch();
			$statement->closeCursor();
			return $result;			
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}
	function add_customer($email,$firstname,$lastname,$password){
		$db = getDB();
		$query="INSERT INTO customers(email,firstname,lastname,password)
				VALUES (?,?,?,?)";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$email);
			$statement->bindParam(2,$firstname);
			$statement->bindParam(3,$lastname);
			$statement->bindParam(4,$password);
			$statement->execute();
			$statement->closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message;
		}
	}
	function delete_customer($customerid){
		$db=getDB();//connect to database
		$query ="DELETE FROM customers
				 WHERE customerid=?";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$customerid);//Use paramater
			$statement->execute();
			$statement->closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}
	function update_customer($customerid,$email,$firstname,$lastname,$password){
		$db=getDB();
		$query="UPDATE customers
				SET email=?, firstname=?, lastname=?, password=?
				WHERE customerid=?";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$email);
			$statement->bindParam(2,$firstname);
			$statement->bindParam(3,$lastname);
			$statement->bindParam(4,$password);
			$statement->bindParam(5,$customerid);
			$statement->execute();
			$statement->closeCursor();		

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}
 ?>