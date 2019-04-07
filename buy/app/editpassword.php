<?php
session_start();
include 'common.php';
myLink();
$pass=$_SESSION['user']['password'];
?>
<html>
	<head>
		<style>
			.update
			{
				background: #fff;
				
			}
			.myinput
			{
				width: 300px;
				border: .1px solid #fff;
				border-radius: 2px;
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 204, .2);
    			box-shadow: 0 0 10px rgba(0, 0, 204, .2);
			}
			.myinput:focus
			{
				transition: all .3s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 204, .4);
    			box-shadow: 0 0 10px rgba(0, 0, 204, .4);
			}
			.table-class hr
			{
				height: 5px;
				border: 1px solid #fff;
			}
			.error
			{
				color: red;
				margin-left: 7px;
				font-size: 11px;
			}
			
		</style>
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
												<label>Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="password" class="myinput input-sm" placeholder="&nbsp;Paswword..." value="<?= $pass ?>">
												
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>New Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter New paswword..." name="password" value="">
												
											</td>
                                        </tr>
                                        <tr>
											<td>
												<hr>
												<label>Confirm Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Confirm New paswword..." name="cpassword" value="">
												
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