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
												<label>Full Name : &nbsp;</label>
											</td>
											<td>
                                                <input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter your Full Name..." name="fullname" size="50" value="<?= $name ?>">
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
												<input type="text" class="myinput input-sm" name="email" placeholder="&nbsp;Enter your Email here..." value="<?= $email ?>"readonly>
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