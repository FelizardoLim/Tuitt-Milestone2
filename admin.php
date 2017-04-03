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
	<!-- admin main -->
	<?php ?>
	<div class="container-fluid admindiv">
		<div class="row">
			<div class='col-xs-12 col-sm-6 col-sm-offset-3 add_div'>
				<h3>Add New Product</h3>
				<form method="POST" class="form-group" action="additem.php">
					<div class="form-group">
						<label for="name">Name: </label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="price">Price: </label>
						<input type="number" min=1 name="price" class="form-control">
					</div>
					<div class="form-group">
						<label for="image">Image location: </label>
						<input type="text" name="image" class="form-control">
					</div>
					<div class="form-group">
						<label for="description">Description: </label>
						<textarea type="text" name="description" class="form-control" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label for="details">Details: </label>
						<textarea type="text" name="details" class="form-control" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label for="stock">Stock: </label>
						<input type="number" min="1" name="stock" class="form-control">
					</div>
					<div class="form-group">
						<label for="category_id">Category: </label>
						<?php 
						require('connection.php');
						$sql = "SELECT DISTINCT id,category_type FROM category";
							$result = mysqli_query($conn, $sql);

							echo "<select class='form-control' name='category_id'>";
							while($row = mysqli_fetch_assoc($result)){
								$id = $row['id'];
								$category = $row['category_type'];
								if(isset($_POST['category_type']) && $_POST['category_type']==$category)
									echo "<option selected>$category</option>";
								else
									echo "<option value='$id'>$category</option>";
							}
							echo "</select>";
						?>
					</div>

					<div class="form-group text-right">
						<button type="submit" class="btn btn-sm btn-success" name="add_item">Add Item</button>
					</div>
				</form>
			</div> 
		</div>
	</div>
	<!-- footer -->
	<?php require_once('footer.php'); ?>
</body>
</html>