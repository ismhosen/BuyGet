<?php
echo "<title>Sign in</title>";
include 'common.php';
include 'connection.php';
myLink();
myHeader();
mySearch();
?>
<?php
$emailErr=$passErr="";
$errCount=1;
$email=$_POST['email'];
$pass=$_POST['password'];

if(isset($_POST['submit']))
{
	if($email=="")
	{
		$errCount++;
		$emailErr="Email must be requried";
	}
	elseif($pass=="")
	{
		$errCount++;
		$passErr="password must be requried";
	}
	else
	{
//		$query=mysqli_query(connection(),"SELECT * FROM users WHERE email='$email' AND password='$pass'");
//		$rows=mysqli_num_rows($query);
//		if($rows==1)
//		{
//			echo "<script>alert('done')</script>";
//		}
//		else
//		{
//			echo "<script>alert('failed')</script>";
//		}
		$query=mysqli_query(connection(),"SELECT * FROM users WHERE email='$email'");
		$rows=mysqli_num_rows($query);
		if($rows==1)
		{
			$query=mysqli_query(connection(),"SELECT * FROM users WHERE password='$pass'");
			$rows=mysqli_num_rows($query);
			if($rows==1)
			{
				$query1=mysqli_query(connection(),"SELECT * FROM customers WHERE email='$email'");
				var_dump('fgh',$query1);
				echo "<script>alert('$email')</script>";
				$rows1=mysqli_num_rows($query1);
				if($rows1==1)
				{
//					for($i=0; $row = mysqli_fetch_assoc($query1); ++$i){
////						echo "<script>alert('text')</script>";
//						//var_dump($persons[$i]['type']);
//					}
					while($row=mysqli_fetch_assoc($query1))
					{
						$emailErr="hello".$row['id'];
						echo "<script>alert('text')</script>";
					}
					
					
				}
				else
				{
					echo "<script>alert('customers not found'])</script>";
				}
				//echo "<script>alert('customers')</script>";
				
			}
			else
			{
				$passErr="password not found";
			}
			
		}
		else
		{
			$emailErr="Email not found";
		}
	}
}


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
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
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
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter your email..." name="email">
												<span class="error"><?php echo $emailErr ?></span>
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
												<input type="password" class="myinput input-sm"  placeholder="&nbsp;Enter your paswword ..." name="password">
												<span class="error"><?php echo $passErr ?></span>
												<br><br>
												<span style="font-size:11px;">Don't have an account?<a href="signup.php"> Sign up</a></span><span style="font-size:11px;" class="pull-right"><a href="signup.php">Forgot Password</a></span>
												<hr>
											</td>
										</tr>
									</tbody>	
								</table>
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
myFooter();
?>
