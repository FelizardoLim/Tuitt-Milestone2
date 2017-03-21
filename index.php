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
	<!-- Jquery file -->
	<script src="effects.js"></script>
</head>
<body>
	<!-- cart nav -->
	<nav class="container-fluid">
		<div class="row">
			<div class="col-xs-3 col-xs-offset-9">
				<div id="cartpanel">
					<button type="button" class="btn btn-default navbar-btn">view cart</button>
					<button type="button" class="btn btn-default navbar-btn">checkout</button>
				</div>
				<h4 id="cartflip">cart</h4>
			</div>
			<script>
				$("#cartflip").click(function() {
					$("#cartpanel").slideToggle("fast");
				});
			</script>
		</div>
	</nav>
	<!-- side nav -->
	<nav class="container-fluid">
		<div class="row">
			<div class="col-xs-2">
				<h4>menu</h4>
				<ul class="nav nav-pills nav-stacked">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">categories <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="">bags</a></li>
							<li><a href="">clothes</a></li>
							<li><a href="">shoes</a></li>
						</ul>
					</li>
					<li><a href="#">about</a></li>
					<li><a href="#">login</a></li>
					<li><a href="#">contact</a></li>
					<li><a href="#">faqs</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- brand name -->
	<header class="container-fluid text-center" style="position: absolute; left: 0; top: 10px; width: 100%;">
		<div>
			<h1>brand label</h1>
		</div>
	</header>
	<!-- main content start -->
	<main class="container">
		<div class="row">
			<!-- inventory -->
			<div class="col-xs-12 col-sm-4 col-md-3">
				<a href="">
					<img class="img-responsive" src="images/placeholder.png" alt="temporary">
				</a>
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ommodo consequat.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3">
				<a href="">
					<img class="img-responsive" src="images/placeholder.png" alt="temporary">
				</a>
				<div>
					<p>Lorem ipsum dloor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ommodo consequat.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3">
				<a href="">
					<img class="img-responsive" src="images/placeholder.png" alt="temporary">
				</a>
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ommodo consequat.</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3">
				<a href="">
					<img class="img-responsive" src="images/placeholder.png" alt="temporary">
				</a>
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea ommodo consequat.</p>
				</div>
			</div>
			<!-- Inventory end -->
		</div>
	</main>
	<!-- main content end -->

	<footer class="container-fluid">
		<!-- contact start -->
		<section class="row">
			<div class="col-xs-3 col-xs-offset-9">
				<h4 id="contactflip">contact</h4>
				<form id="contactpanel" class="form-group">
					<div class="form-group">
						<label for="name">name</label>
						<input type="text" class="form-control" name="name" placeholder="Your Name">
					</div>
					<div class="form-group">
						<label for="email">email</label>
						<input type="email" class="form-control" name="email" placeholder="Your Email Address">
					</div>
					<div class="form-group">
						<label for="message">message</label>
						<textarea type="text" class="form-control" name="message" rows="7" placeholder="Your Message"></textarea>
					</div>
				</form>
			</div>
		</section>
		<script>
			$("#contactflip").click(function() {
				$("#contactpanel").slideToggle("slow");
			});			
		</script>
		<!-- contact end -->
	</footer>

<div id="wrapper">
  <div id="element">
    Lorem ipsum dolor sit.
    <br />
    Lorem ipsum dolor sit amet.
    <br />
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae explicabo!
  </div>
</div>

<input type="button" value="Toggle hidden" />

<script>
	
$(document).on("click", "input", function()
{
  $("#wrapper").slideToggle("hidden");
});

</script>


</body>
</html>