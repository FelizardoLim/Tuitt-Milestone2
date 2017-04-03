<?php 
	if(isset($_POST['editproduct'])) {
		require('connection.php');
		$id = $_GET['id'];
		
		$name = $_POST['name'];
		$price = $_POST['price'];
		$image = $_POST['image'];
		$description = addslashes($_POST['description']);
		$details = addslashes($_POST['details']);
		$stock = $_POST['stock'];
		$category_id = $_POST['category_id'];

		$sql = "UPDATE product SET 
				name = '$name',
				price = '$price',
				image = '$image',
				description = '$description',
				details = '$details',
				stock = '$stock',
				category_id = '$category_id'
				WHERE id='$id'";
		mysqli_query($conn, $sql);
	}

	header('location: index.php');
?> 