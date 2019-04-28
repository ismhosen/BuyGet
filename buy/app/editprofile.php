<?php
session_start();
include 'common.php';
myLink();
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$pass=$_SESSION['user']['password'];
$phone=$_SESSION['user']['phone'];
$dob=$_SESSION['user']['dob'];
$address=$_SESSION['user']['address'];
$imgname=$_SESSION['user']['imgname'];

?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="commoncss.css">
	</head>
	<body>
		<div class="container text-center">
			<form action="editprofilehandler.php" method="POST" enctype="multipart/form-data">
				<div class="update">
					<div class="row">
						<div class="col-md-12">
							<h3 class="">Edit Your Profile</h3>
							<hr>
							
							<div class="table-responsive">
								<table align="center" class="table-class">
									<tbody>
										<tr>

										<tr>
												<td width=300px><strong>Select an Image: </strong></td>
												<td width=900px><input type="file" name="imgname" class="productseditbox"></td>
										</tr>

										<input type="hidden" name="existing_image" value="<?= $imgname ?>">


											<td>
												<label>Full Name : &nbsp;</label>
											</td>
											<td>
                                                <input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter your Full Name..." name="name" size="50" value="<?= $name ?>">
                                                <span class="error"><?php echo $_GET['msgname']?></span>
												
											</td>		
										</tr>
										<tr>
											<td>
												<hr>
												<label>Email : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm" name="email" placeholder="&nbsp;Enter your Email here..." value="<?= $email ?>" readonly>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Phone : &nbsp;</label>
											</td>
											<td>
												<hr>
                                                <input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter mobile no ..." name="phone" value="<?= $phone ?>">
                                                <span class="error"><?php echo $_GET['msgpass'];?></span>	
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Birth Date : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="date" class="myinput input-sm" name="date" value="<?= $dob ?>">
												
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Address : &nbsp;</label>
												<hr>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Flat/House No/Road No/Area ..." name="address" value="<?= $address ?>">
												<hr>
											</td>
										</tr>
									</tbody>	
								</table>
								<button type="submit" class="btn btn-success" name="update_profile">update</button><br><br><br>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>