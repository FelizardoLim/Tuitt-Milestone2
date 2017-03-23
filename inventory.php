<?php 

function get_title() {
	echo "Menu Page";
}


function get_content() {
	include('connection.php');
	mysqli_set_charset($conn,"UTF8");

	$sql = "SELECT DISTINCT category_type FROM category";
	$result = mysqli_query($conn, $sql);

	echo "<form method='POST' action=''>";
	echo "<select name='category_type'>";
	echo "<option>All</option>";
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$category = $row['category_type'];
		if(isset($_POST['category_type']) && $_POST['category_type']==$category)
			echo "<option selected>$category</option>";
		else
			echo "<option value='$id'>$category</option>";
	}

	echo "</select> <input type='submit' name='search' value='Search'>";
	echo "</form><br>";
	if(isset($_POST['search']) && $_POST['category_type']!= "All") {
		$category = $_POST['category_type'];
		$sql = "SELECT * FROM product WHERE category_id = '$category'";
	} else
		$sql = "SELECT * FROM category";
	

	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$name = $row['name'];
		$price = $row['price'];
		$image = $row['image'];
		$description = $row['description'];
		$details = $row['details'];
		$stock = $row['stock'];
		$category_id = $row['category_id'];

		echo "<div>
				Name: $name <br>
				Price: $price <br>
				$image <br>
				Description: $description <br>
				Details: $details <br>
			</div>";
	}
}

?>





