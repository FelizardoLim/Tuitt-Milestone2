<?php 

$message = "";
session_start();
if (isset($_SESSION['message'])) {
	$message = "<div class='alert alert-success'>".$_SESSION['message']."</div>";
	unset($_SESSION['message']);
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	include('connection.php');
	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	$sql = "SELECT * FROM user_account WHERE email = '$username' AND password = '$password'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)) {
		session_start();
		
		$_SESSION['username'] = $username; 
		$row = mysqli_fetch_assoc($result);
		$_SESSION['role'] = $row['role_id'];
		if($row['role_id'] == 1)
			$_SESSION['message'] = 
			"<div class='text-center'>
				<h4>Administrator Access!</h4>
				<h4>Here, you're allowed to do MORE! Get to work!</h4>
			</div>";
		else
			$_SESSION['message'] = 
			"<div class='text-center'>
				<h4>Welcome! Let's start shopping!</h4>
			</div>";
		header('location: index.php');
	}
}

?>

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
	<!-- pending -->
	<!-- Jquery file -->
	<script src="effects.js"></script>
</head>
<body>
	<!-- navbar -->
	<?php require_once('navbar.php'); ?>
	<!-- login -->
	<div class="container-fluid logindiv">
		<?php 
			if(isset($message)) {
				echo "$message";
				} 
		?>
		<div class="row">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12 loginmain">
				<h3>Login</h3>
				<form class="form-group" method="POST" action="">
					<div class="form-group">
						<label>email: </label>
						<input class="form-control" type="email" name="username" placeholder="Your Username">
					</div>
					<div class="form-group">
						<label>password: </label>
						<input class="form-control" type="password" name="password" placeholder="Your Password">
					</div>
					<button class="btn btn-default" name="login" type="submit">Login</button>
				</form>
				<!-- register modal start -->
				<?php require_once('register.php'); ?> 
				<!-- register modal end -->
			</div>
		</div>
	</div>
	<!-- footer -->
	<?php require_once('footer.php'); ?>
</body>
</html>