<?php

include("config.php");
include("header.php");

$query = mysqli_query($db_conn,"SELECT * FROM customers");

?>

<nav>
	<ol class="breadcrumb">
		<li class="breadcrumb-item active">Customers</a></li>
	</ol>
</nav>

<a href="add_customer.php" class="btn btn-primary">Add Customer</a>

<br><br>

<table class="table">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		
		<?php 

		while($row = mysqli_fetch_array($query)){
		
		$customer_id = $row['customer_id'];
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$email = $row['email'];
		
		?>
		
		<tr>	
			<td> <?php echo $first_name; ?> </td> 
		 	<td> <?php echo $last_name; ?> </td>
		 	<td> <?php echo $email; ?> </td>
		 	<td> 
		 		<a href="edit_customer.php?customer_id=<?php echo $customer_id; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
		 		<a href="post.php?delete_customer=<?php echo $customer_id; ?>" class="btn btn-sm btn-outline-secondary">Delete</a>
		 	</td>
		</tr>
		
		<?php 
		
		} 

		?>
	
	</tbody>
</table>

<?php 

include("footer.php");

?>
