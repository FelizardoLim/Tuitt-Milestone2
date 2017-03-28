<?php 

//came from cart page - delete button - key declared for targeting item
$key = $_GET['deleteitem'];

//delete cart item from existing session
session_start();
unset($_SESSION['cart'][$key]);

//landing page after delete
header('location: cart.php');

?>