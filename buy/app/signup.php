<?php
session_start();
echo "<title>Sign Up</title>";
include 'common.php';
//include '../service/users_service.php';
myLink();
myHeader();
?>

<html>
	<head>
		<style>
			.signup
			{
				margin-top: 120px;
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
			<form action="signuphandler.php" method="POST">
				<div class="signup">
					<div class="row">
						<div class="col-md-12">
							<h3 class="">Sign UP Form</h3>
							<hr>
							
							<div class="table-responsive">
								<table align="center" class="table-class">
									<tbody>
										<tr>
											<td>
												<label>Full Name : &nbsp;</label>
											</td>
											<td>
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter your Full Name..." name="fullname" size="50" value="<?php echo $_SESSION['name'];?>">
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
												<input type="text" class="myinput input-sm" name="email" placeholder="&nbsp;Enter your Email here..." value="<?php echo $_SESSION['email'];?>">
												<span class="error"><?php echo $_GET['msgemail']?></span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm" name="password" placeholder="&nbsp;Paswword..." value="<?php echo $_SESSION['password'];?>">
												<span class="error"><?php echo $_GET['msgpass'];?></span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Confirm Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter your paswword..." name="cpassword" value="<?php echo $_SESSION['cpassword'];?>">
												<span class="error"><?php echo $_GET['msgpassc'];?></span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Phone : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter mobile no ..." name="phone" value="<?php echo $_SESSION['phone']?>">
												<span class="error"><?php echo $_GET['msgphone'];?></span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Birth Date : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="date" class="myinput input-sm" name="date" value="<?php echo $_SESSION['date'];?>">
												<span class="error"><?php echo $_GET['msgdate'];?></span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Gender : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="radio" class="mygender" name="gender" value="Male">&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" class="mygender" name="gender" value="Female">&nbsp;&nbsp;Female&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" class="mygender" name="gender" value="Others">&nbsp;&nbsp;Others&nbsp;&nbsp;&nbsp;&nbsp;
												<span class="error"><?php echo $_GET['msggender'];?></span>
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
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Flat/House No/Road No/Area ..." name="address" value="<?php echo $_SESSION['address'];?>">
												<span class="error"><?php echo $_GET['msgaddress'];?></span>
												<hr>
											</td>
										</tr>
									</tbody>	
								</table>
								<span>Already have an account?<a href="signin.php"> Sign in</a></span><br>
								<input type="checkbox" name="checkBox">&nbsp;&nbsp;By creating an account you agree to our <a href="signup.php">Terms & Privacy</a>.
								<span class="error"><?php echo $_GET['msgcheckbox'];?></span>
								<hr>
								<button type="submit" class="btn btn-success" name="submit">Submit</button><br><br><br>
							</div>
							
						</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
	
<?php
session_unset();
//session_destroy();
myFooter();
?>
