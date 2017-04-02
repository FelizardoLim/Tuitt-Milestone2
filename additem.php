<?php 
	if(isset($_POST['add_item'])) {
	
		require('connection.php');
		$name = $_POST['name'];
		$price = $_POST['price'];
		$image = $_POST['image'];
		$description = $_POST['description'];
		$details = $_POST['details'];
		$stock = $_POST['stock'];
		$category_id = $_POST['category_id'];
	
		$sql = "INSERT INTO product (name, price, image, description, details, stock, category_id) VALUES ('$name', '$price', '$image', '$description', '$details', '$stock', '$category_id')";
		$result = mysqli_query($conn, $sql);
	}
?>