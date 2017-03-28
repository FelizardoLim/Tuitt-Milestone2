<?php

session_start();
$id = $_GET['id'];
$quantity = $_POST['quantity'];


if(isset($_SESSION['cart'][$id])){
	$_SESSION['cart'][$id]+=$quantity;
} else {
	$_SESSION['cart'][$id] = $quantity;
}

header('location: cart.php');

?>