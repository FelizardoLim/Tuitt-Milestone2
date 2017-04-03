<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index Page</title>
	<!-- Jquery source -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Bootstrap source -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- css file -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- social media icons -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<!-- font style -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!-- Jquery file -->
	<script src="effects.js"></script>
</head>
<body>
	<!-- navbar -->
	<?php require_once('navbar.php'); ?>
	<!-- cart start -->
	<div class="container-fluid cartdiv">
	<h3 class="text-center textcolor">My Cart</h3>
		<div class="row">
			<table class="col-xs-12 table text-center">
				<tbody>
				<?php 
					include('connection.php');
					mysqli_set_charset($conn,"UTF8");

					if(isset($_SESSION['cart'])) {
						$total = "";
						foreach ($_SESSION['cart'] as $id => $quantity) {
							$sql = "SELECT * FROM product WHERE id=$id";
							extract(mysqli_fetch_assoc(mysqli_query($conn, $sql)));
							$subtotal = $price*$quantity; 
							$total = $total + $subtotal;

					//1. $sql query - $sql = "...."
					//2. run the query -- $result = mysqli_query($conn, $sql)
					//3. conver to associative array -- eg. while($row = mysqli_fetch_assoc($result))
					//4. extract to get each index as separate variable based on (key). Without extract - variable naming needs to be declared eg. $name = $row['name'];
				?>
					<tr>
						<td class="col-xs-4 col-sm-3 col-md-1">
							<img src="<?php echo "$image"; ?>" class="img-responsive">
						</td>
						<td class="textcolor col-xs-2 col-sm-2 col-md-1">
							<?php echo "$name"; ?>
						</td>
						<td class="col-xs-3 col-sm-2 col-md-1">
							<form method="POST">
								<input class="form-control" type="number" min="1" max="$stock" value="<?php echo $_SESSION['cart'][$id]; ?>">
							</form>
						</td>
						<td class="textcolor col-xs-2 col-sm-2 col-md-1">
							<?php echo "PHP "; echo number_format($price,2); ?>
						</td>
						<td class="col-xs-1 col-sm-1 col-md-1">
							<!-- get variable for delete key from variable declared above on the foreach loop. -->
							<a href="deleteitem.php?deleteitem=<?php echo $id; ?>">
								<span class="glyphicon glyphicon-remove"></span>
							</a>
						</td>
					</tr>
				<?php 
						}
					} else {
						echo "";
					}
				?>
				</tbody>
			</table>
			<div class="text-center" style="width: 100%; padding-bottom: 20px;">
				<button type="submit" class="btn btn-success">Checkout 
					<?php 
						echo "PHP ".number_format($total,2);
					?>
				</button>
			</div>
		</div>
	</div>
	<!-- cart end -->
	<!-- footer -->
	<?php require_once('footer.php'); ?>
</body>
</html>