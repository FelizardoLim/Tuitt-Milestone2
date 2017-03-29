					<?php 

					if($_SERVER['REQUEST_METHOD'] == 'POST') {
						require('connection.php'); 
						$username = $_POST['username'];
						$password = sha1($_POST['password']);
						$name = $_POST['name'];
						$address = $_POST['address'];
						$contact_number = $_POST['contactnumber'];
						if($_POST['password'] == $_POST['confirmpassword']) {
							$sql = "INSERT INTO user_account (email, password, role_id) VALUES ('$username', '$password', '3')";
							$result = mysqli_query($conn, $sql);

							$sql = "SELECT id FROM user_account ORDER BY id DESC LIMIT 1";
							$id = mysqli_query($conn,$sql);
							extract(mysqli_fetch_assoc($id));
							
							$sql = "INSERT INTO user_info (name, address, contact_number, user_account_id) VALUES ('$name', '$address', '$contact_number', '$id')";
							$result2 = mysqli_query($conn, $sql);
							if($result AND $result2) {
								session_start();
								$_SESSION['message'] = 
								"<div>
									<h4>Congratulations!</h4>
									<p>You have completed our registration process. You're one step closer to easy shopping.</p>
									<p>Please key-in your login credentials below to get started. </p>
								</div>";
								header('location: login.php');
							}
						}
					}

					?>

					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#registermodal">No account? Create one!</button>
					<div class="modal fade" id="registermodal" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h3 class="modal-title">Register</h3>
								</div>
								<div class="modal-body">
									<form class="form-group" method="POST">
										<label>email: </label>
										<input required class="form-control" type="email" name="username" placeholder="Your Email Address"><br>
										<label>password: </label>
										<input required class="form-control" type="password" name="password" placeholder="Your New Password"><br>
										<label>confirm password: </label>
										<input required class="form-control" type="password" name="confirmpassword" placeholder="Confirm Your New Password"><br>
										<label>name: </label>
										<input required class="form-control" type="text" name="name" placeholder="Your First and Last Name"><br>
										<label>address: </label>
										<textarea required class="form-control" type="text" name="address" placeholder="Your Delivery Address"></textarea><br>
										<label>contact number: </label>
										<input required class="form-control" type="text" name="contactnumber" placeholder="Your Mobile Number"><br>
										<button class="btn btn-default" type="submit" name="register">Register</button>
									</form>
								</div>
							    <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    </div>
							</div>
						</div>
					</div>