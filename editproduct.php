<?php 
	if(isset($_POST['editproduct'])) {
		require('connection.php');
		$id = $_GET['id'];
		
		$name = $_POST['name'];
		$price = $_POST['price'];
		$image = $_POST['image'];
		$description = $_POST['description'];
		$details = $_POST['details'];
		$stock = $_POST['stock'];

		$sql = "UPDATE product SET 
				name = '$name',
				price = '$price',
				image = '$image',
				description = '$description',
				details = '$details',
				stock = '$stock'
				WHERE id='$id'";
		mysqli_query($conn, $sql);
	}
?> 