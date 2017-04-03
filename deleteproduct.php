<?php
	
	session_start();
	if(isset($_SESSION['username']) && $_SESSION['role'] == '1') {
		require('connection.php');
		$id = $_GET['id'];

		$sql = "DELETE FROM product WHERE id = '$id'";
		mysqli_query($conn, $sql); 
	}

	header('location: index.php');

?>