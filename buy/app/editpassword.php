<?php
session_start();
include 'common.php';
myLink();
$pass=$_SESSION['user']['password'];
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="commoncss.css">

	</head>
	<body>
		<div class="container text-center">
			<form action="editprofilehandler.php" method="POST">
				<div class="update">
					<div class="row">
						<div class="col-md-12">
							<h3 class="">Edit Your Profile</h3>
							<hr>
							
							<div class="table-responsive">
								<table align="center" class="table-class">
									<tbody>
										<tr>
											<td>
												<hr>
												<label>Old Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="password" class="myinput input-sm" placeholder="&nbsp;Paswword..." name="oldpassword">
												
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>New Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="password" class="myinput input-sm"  placeholder="&nbsp;Enter New paswword..." name="newpassword" value="">
												
											</td>
                                        </tr>
                                        <tr>
											<td>
												<hr>
												<label>Confirm Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="password" class="myinput input-sm"  placeholder="&nbsp;Confirm New paswword..." name="cpassword" value="">
											</td>
										</tr>
									</tbody>	
								</table>
								<button type="submit" class="btn btn-success" name="update_password">Update</button><br><br><br>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>