<?php 

function get_title() {
	echo "Menu Page";
}


function get_content() {
	require('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT DISTINCT id,category_type FROM category";
	$result = mysqli_query($conn, $sql);

	echo "<div class='categorydropdown'>";
	echo "<form class='form-group col-sm-3 col-sm-offset-9' method='POST' action=''>";
	echo "<select class='form-control' name='category_type'>";
	echo "<option>All</option>";
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$category = $row['category_type'];
		if(isset($_POST['category_type']) && $_POST['category_type']==$id)
			echo "<option selected>$category</option>";
		else
			echo "<option value='$id'>$category</option>";
	}

	echo "</select><button type='submit' name='search' class='btn btn-success form-control'>Search</button>";
	echo "</form>";
	echo "</div>";
	if(isset($_POST['search']) && $_POST['category_type']!= "All") {
		$category = $_POST['category_type'];
		$sql = "SELECT * FROM product WHERE category_id = '$category'";
	} else
		$sql = "SELECT * FROM product";
	

	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		// $id = $row['id'];
		// $name = $row['name'];
		// $price = $row['price'];
		// $image = $row['image'];
		// $description = $row['description'];
		// $details = $row['details'];
		// $stock = $row['stock'];
		// $category_id = $row['category_id'];
		
		//if extracting for simple use --- shorthand of items above.
		extract($row);

		echo "
		<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3' id='wrapper'>
			<h3 class='text-center textcolor'>
				$name
			</h3>
			<img class='img-responsive inventoryimg' src='$image' alt='$name'>
			<!-- modal more start -->
				<div id='moremodal$id' class='modal fade' role='dialog'> 
					<div class='modal-dialog'>
						<div class='modal-content'>
							<div class='modal-header'>
								<button type='button' class='close' data-dismiss='modal'>&times;</button>
								<h3 class='modal-title'>$name</h3>
							</div>
							<div class='modal-body'>
								<h4>Brief Description:</h4>
								<p>$description</p>
								<h4>Consumption Benefits: </h4>
								<p>$details</p>
								<h4>Price:</h4><span>PHP ". number_format($price,2) ."</span>
							</div>
							<div class='modal-footer'>
								<button type='submit' class='btn btn-sm btn-default' data-dismiss='modal'>Close</button>
							</div>
						</div>
					</div>
				</div>
			<!-- modal more end -->
			<!-- modal add to cart start -->
				<div id='addtocart$id' class='modal fade' role='dialog'>
					<div class='modal-dialog'>
						<div class='modal-content'>
							<div class='modal-header'>
								<button type='button' class='close' data-dismiss='modal'>&times;</button>
								<h3 class='modal-title'>Add to Cart</h3>
							</div>
							<div class='modal-body'>
								<form class='form-group' method='POST' action='addtocart.php?id=$id'>
									<label for='quantity'>Quantity: </label>
									<input required class='form-control' name='quantity' type='number' min=1 max=$stock><br>
									<button type='submit' class='btn btn-sm btn-success' name='addtocart'>Add to Cart</button>
								</form>
							</div>
							<div class='modal-footer'>
								<button type='button' class='btn btn-sm btn-default' data-dismiss='modal'>Close</button>
							</div>
						</div>
					</div>
				</div>
			<!-- modal add to cart end -->
			<!-- modal edit product start -->
				<div id='editproduct$id' class='modal fade' role='dialog'>
					<div class='modal-dialog'>
						<div class='modal-content'>
							<div class='modal-header'>
								<button type='button' class='close' data-dismiss='modal'>&times;</button>
								<h3 class='modal-title'>Edit $name</h3>
							</div>
							<div class='modal-body'>
								<form class='form-group' method='POST' action='editproduct.php?id=$id'>
									<div class='form-group'>
										<label for='name'>Name: </label>
										<input type='text' name='name' class='form-control' value='$name'>
									</div>
									<div class='form-group'>
										<label for='price'>Price: </label>
										<input type='number' min=1 name='price' class='form-control' value='$price'>
									</div>
									<div class='form-group'>
										<label for='image'>Image location: </label>
										<input type='text' name='image' class='form-control' value='$image'>
									</div>
									<div class='form-group'>
										<label for='description'>Description: </label>
										<textarea type='text' name='description' class='form-control' rows='5'>$description</textarea>
									</div>
									<div class='form-group'>
										<label for='details'>Details: </label>
										<textarea type='text' name='details' class='form-control' rows='5'>$details</textarea>
									</div>
									<div class='form-group'>
										<label for='stock'>Stock: </label>
										<input type='number' min='1' name='stock' class='form-control' value='$stock'>
									</div>
									<div class='form-group'>
										<label for='category_id'>Category: </label>"; 

										$sql2 = "SELECT DISTINCT id,category_type FROM category";
										$result2 = mysqli_query($conn, $sql2);

										echo "<select class='form-control' name='category_id'>";
										while($row = mysqli_fetch_assoc($result2)){
											$id2 = $row['id'];
											$category2 = $row['category_type'];
											echo "<option value='$id2'>$category2</option>";
										}
										echo "</select>
									</div>
									<div class='form-group'>
										<button type'submit' class='btn btn-sm btn-success' name='editproduct'>Submit Changes</button>
									</div>
								</form>
							</div>
							<div class='modal-footer'>
								<button type='button' class='btn btn-sm btn-default' data-dismiss='modal'>Close</button>
							</div>
						</div>
					</div>
				</div>
			<!-- modal edit product end -->
			<!-- modal delete to cart start -->
				<div id='delete$id' class='modal fade' role='dialog'>
					<div class='modal-dialog'>
						<div class='modal-content'>
							<div class='modal-header'>
								<button type='button' class='close' data-dismiss='modal'>&times;</button>
								<h3 class='modal-title'>Delete $name</h3>
							</div>
							<div class='modal-body'>
								<h4>Are you sure?</h4>
								<p>Proceeding with this action would completely erase all information tied to this item. </p>
								<p>Please review the details carefully before completing this action as changes done afterwards would be irreversible. </p>
								<a href='deleteproduct.php?id=$id'><button type'submit' class='btn btn-sm btn-danger' name='delete'>Yes! Delete this Item</button></a>
							</div>
							<div class='modal-footer'>
								<button type='button' class='btn btn-sm btn-default' data-dismiss='modal'>Close</button>
							</div>
						</div>
					</div>
				</div>
			<!-- modal delete to cart end -->
			<div class='text-center' id='content'>";
			//to display and not display buttons for admin and normal user
				if(isset($_SESSION['username']) && $_SESSION['role'] == '1') {
					echo "
						<div class='adminbtn'>
							<button type='button' class='btn btn-sm btn-warning' data-toggle='modal' data-target='#editproduct$id' style='width: 60px;'>Edit</button>
							<button type='button' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#delete$id'>Delete</button>
						</div>";
				} else {
					echo "
						<div class='contentbtn'>
							<button type='button' class='btn btn-sm btn-info' data-toggle='modal' data-target='#moremodal$id'>More Details</button>
							<button type='button' class='btn btn-sm btn-success' data-toggle='modal' data-target='#addtocart$id'>Add to Cart</button>
						</div>";
				}
			
			echo "
			</div>
		</div>";
	}
}

get_content();

?>