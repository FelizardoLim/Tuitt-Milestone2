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
	<h3 class="text-center">My Cart</h3>
	<div>
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-2 col-sm-offset-1">
					<img class="img-responsive" src="images/inventory/orange.jpg">
				</div>
				<div class="col-sm-2 cartitem">
					<span>Orange</span>
				</div>
				<div class="col-sm-1 col-sm-offset-2 cartitem">
					<form class="form-group" method="POST">
						<input class="form-control" type="number" min="1" max="$stock"></input>
					</form>
				</div>
				<div class="col-sm-2 cartitem">
					<span>PHP 150.00</span>
				</div>
				<div class="col-sm-1 cartitem">
					<a href="#">Remove</a>
				</div>
			</div>
		</div>
	</div>

<div class="container table-responsive">
	<table class="table text-center">
		<tbody>
			<tr style="padding-left: 200px; padding-right: 200px;">
				<!-- <td id="tablespace"></td> -->
				<td id="tableimg"><img src="images/inventory/apple.jpg" class="img-responsive"></td>
				<td id="tablename">Orange</td>
				<!-- <td id="tablespace"></td> -->
				<td id="tablequantity">
					<form method="POST">
						<input class="form-control" type="number" min="1" max="$stock"></input>
					</form>
				</td>
				<td id="tableprice">PHP 150.00</td>
				<td id="tableremove"><a href="#">Remove</a></td>
				<!-- <td id="tablespace"></td> -->
			</tr>
		</tbody>
	</table>
</div>

	<!-- cart end -->
	<!-- footer -->
	<?php require_once('footer.php'); ?>
</body>
</html>