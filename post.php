<?php
	
include("config.php");

if(isset($_POST['add_customer'])){
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];

	mysqli_query($db_conn,"INSERT INTO customers SET first_name = '$first_name', last_name = '$last_name', email = '$email'");

	header("location:customers.php");
}

if(isset($_POST['edit_customer'])){
	$customer_id = $_POST['customer_id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];

	mysqli_query($db_conn,"UPDATE customers SET first_name = '$first_name', last_name = '$last_name', email = '$email' WHERE customer_id = $customer_id");

	header("location:customers.php");
}

if(isset($_GET['delete_customer'])){
	$customer_id = $_GET['delete_customer'];

	mysqli_query($db_conn,"DELETE FROM customers WHERE customer_id = $customer_id");

	header("location:customers.php");
}

?>
