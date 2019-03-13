<?php

include("config.php");
include("header.php");

if(isset($_GET['customer_id'])){
	$customer_id = $_GET['customer_id'];
	
	$query = mysqli_query($db_conn,"SELECT * FROM customers WHERE customer_id = $customer_id");
	
	$row = mysqli_fetch_array($query);
	
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];

?>

<nav>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
		<li class="breadcrumb-item active">Edit Customer</li>
	</ol>
</nav>

<form action="post.php" method="post">
	<input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
	<div class="form-group">
		<label>First Name</label>
		<input type="text" class="form-control" name="first_name" value="<?php echo $first_name; ?>">
	</div>
	<div class="form-group">
		<label>Last Name</label>
		<input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
	</div>
	<button type="submit" class="btn btn-primary" name="edit_customer">Submit</button>
</form>

<?php 
	
}

include("footer.php");

?>
