<?php
echo "<title>Watch</title>";
include 'common.php';
myLink();
myHeader();
mySearch();
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
			
		</style>
	</head>
	<body>
		<div class="container text-center">
			<form action="" method="POST">
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
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter your Full Name ..." name="fullName" size="50">
											</td>		
										</tr>
										<tr>
											<td>
												<hr>
												<label>Email : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter your Full Name ..." name="fullName">
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="password" class="myinput input-sm"  placeholder="&nbsp;Enter your paswword ..." name="fullName">
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Confirm Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="password" class="myinput input-sm"  placeholder="&nbsp;Enter your paswword ..." name="fullName">
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Phone : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter mobile no ..." name="fullName">
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Birth Date : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="date" class="myinput input-sm" name="fullName">
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
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Flat/House No/Road No/Area ..." name="fullName">
												<hr>
											</td>
										</tr>
									</tbody>	
								</table>
								<span>Already have an account?<a href="signin.php"> Sign in</a></span><br>
								<input type="checkbox" name="checkBox">&nbsp;&nbsp;By creating an account you agree to our <a href="signup.php">Terms & Privacy</a>.
								<hr>
								<button type="button" class="btn btn-success">Success</button><br><br><br>
							</div>
							
						</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
	
<?php
myFooter();
?>
