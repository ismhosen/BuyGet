<?php
echo "<title>Sign in</title>";
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
												<hr>
												<label>Email : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter your Full Name ..." name="email">
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Password : &nbsp;</label><br><br>
												<hr>
											</td>
											<td>
												<hr>
												<input type="password" class="myinput input-sm"  placeholder="&nbsp;Enter your paswword ..." name="password"><br><br>
												<span style="font-size:11px;">Don't have an account?<a href="signup.php"> Sign up</a></span><span style="font-size:11px;" class="pull-right"><a href="signup.php">Forgot Password</a></span>
												<hr>
											</td>
										</tr>
									</tbody>	
								</table>
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
