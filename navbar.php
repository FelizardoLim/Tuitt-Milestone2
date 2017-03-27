	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primarynavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">BRAND</a>
			</div>
			<div class="collapse navbar-collapse" id="primarynavbar">
				<ul class="nav navbar-nav navbar-right text-uppercase">
					<li><a href="#">about</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">categories <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">category 1</a></li>
							<li><a href="#">category 2</a></li>
							<li><a href="#">category 3</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">category 4</a></li>
							<li><a href="#">category 5</a></li>
						</ul>
					</li>
					<?php if(!isset($_SESSION['username'])) { ?>
					<li><a href="login.php">login</a></li>
					<?php } else {
						echo "<li><a href='logout.php'>logout</a></li>"; 
					} ?>
					<li><a class="glyphicon glyphicon-shopping-cart" aria-hidden="true" href="cart.php"></a></li>
				</ul>
			</div>
		</div>
	</nav>