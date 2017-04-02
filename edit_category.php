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