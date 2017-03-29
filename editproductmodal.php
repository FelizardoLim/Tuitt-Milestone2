<!-- modal start -->
<div class="modal fade" id="editproductmodal<?php echo $id; ?>" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Edit <?php echo "$name "; ?>Collection Inventory</h3>
			</div>
			<div class="modal-body">
				<form class="form-group" method="POST" action='editproduct.php?id=<?php echo $id; ?>'>
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
					<input type="text" name="description" class="form-control">
				</div>
				<div class="form-group">
					<label for="details">Details: </label>
					<input type="text" name="details" class="form-control">
				</div>
				<div class="form-group">
					<label for="stock">Stock: </label>
					<input type="number" min="1" name="stock" class="form-control">
				</div>
				<div class="form-group text-right">
					<button type="submit" class="btn btn-sm btn-success" name="edit_product">Save Changes</button>
				</div>
			</div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		    </div>
		</div>
	</div>
</div><!-- modal end -->