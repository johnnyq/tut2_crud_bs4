<?php

include("config.php");
include("header.php");	

?>

<nav>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
		<li class="breadcrumb-item active">Add Customer</li>
	</ol>
</nav>

<form action="post.php" method="post">
	<div class="form-group">
		<label>First Name</label>
		<input type="text" class="form-control" name="first_name">
	</div>
	<div class="form-group">
		<label>Last Name</label>
		<input type="text" class="form-control" name="last_name">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email">
	</div>
	<button type="submit" class="btn btn-primary" name="add_customer">Submit</button>
</form>

<?php 

include("footer.php");

?>
