<?php
session_start();
echo "<title>Sign Up</title>";
include 'common.php';
include 'connection.php';
myLink();
myHeader();
mySearch();
?>
<?php
$nameErr=$emailErr=$passErr=$cpassErr=$phoneErr=$dateErr=$addresErr=$genderErr=$emailErrspace=checkBoxErr=="";
$errCount=1;
$name=$_POST['fullname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$checkBox=$_POST['checkBox'];

	if(isset($_POST['submit']))
	{
		$name1=$_POST['fullname'];
//		echo "<script>alert($pass)</script>";
//		echo "<script>alert($name1)</script>";
		if(empty($name))
		{
			//echo "<script>alert('hello')</script>";
			$nameErr = "Name is required";
			$errCount++;
			header('location','signup.php');
		}
		else
		{
			$word=str_word_count($name);
			if($word<2)
			{
				$nameErr = "*Name at least two words";
				$errCount++;
			}
		}
		
		
		if($email=="")
		{
			$emailErr = "Email is required";
			$errCount++;
		}
		else
		{
			$emailErrlocal=0;
			$length=strlen($email);
			$validationCounter=0;
			$pointerOfSpecialSign=0;
			$i=0;
			for ($i; $i < $length-1; $i++)
			{ 
				if ($email[$i]==" ")
				{
					$emailErrlocal=1;
					
					$errCount++;
					break;
				}
				elseif ($validationCounter==0) 
				{
					if ($email[$i]=="@" && $i>=1) 
					{
						$validationCounter=1;
						$pointerOfSpecialSign=$i;
					}
				}
				else if($validationCounter==1)
				{
					if($email[$i]=="." && $i>=$pointerOfSpecialSign+2)
					{
						$validationCounter=2;
					}
				}
			}
			if($validationCounter==2)
			{
				$email=$_POST['email'];
			}
			else
			{
				if($emailErrlocal==1)
				{
					$emailErr = "Email can't take any space";
					$errCount++;
				}
				else
				{
					$emailErr = "You entered a incorrect Email address";
					$errCount++;
				}
			}
		}
		
		
		if($pass==""||$cpass=="")
		{
			$passErr = "Password is required";
			$errCount++;
		}
		else
		{
			//$pass=$_POST['password'];
			$passErrlocal=0;
			//var_dump(strlen($pass) != 5);
			if(strlen($pass) != 5) 
			{
				$errCount++;
				$passErrlocal=1;	
			}
			elseif(!(count((explode("@",$pass)))>=2||count(explode("#",$pass))>=2||count(explode("$",$pass))>=2||count(explode("%",$pass))>=2))
			{
				$errCount++;
				$passErrlocal=2;
				//echo "<script>alert('@, #, $, % ')</script>";
			}
			elseif($pass!=$cpass)
			{
				$errCount++;
				$passErrlocal=3;
				//echo "<script>alert('not match')</script>";
			}
			
			if($passErrlocal==0) 
			{
				$pass=$_POST['password'];
			}
			elseif($passErrlocal==1) 
			{
				$passErr="Password must be five (5) characters";
				//echo "<script>alert('ahsd')</script>";
			}
			elseif($passErrlocal==2) 
			{
				$passErr="Password must contain at least one of the special characters (@, #, $, %)";
			}
			elseif($passErrlocal==3) 
			{
				$cpassErr="Password doesn't match";
			}
			
		}
	
		
		if($phone=="")
		{
			$phoneErr = "Mobile No is required";
			$errCount++;
		}
		else
		{
			if(strlen($phone) != 11) 
			{
				$errCount++;
				$phoneErr="Password must be five (5) characters";	
			}
			else
			{
				$phone=$_POST['phone'];
			}
		}
		
		
		if($date=="")
		{
			$dateErr = "Birth Date is required";
			$errCount++;
		}
		else
		{
			$date=$_POST['date'];
		}
		
		
		if($address=="")
		{
			$addressErr = "Adress is required";
			$errCount++;
		}
		else
		{
			$address=$_POST['address'];
		}
		
		
		if(empty($gender))
		{
			$genderErr = "Gender is required";
			$errCount++;
		}
		else
		{
			$gender=$_POST['gender'];
		}
		
		
		if(empty($checkBox))
		{
			$checkBoxErr = "Please Check";
			$errCount++;
		}
		else
		{
			$checkBox=$_POST['checkBox'];
		}
		
		
		if($errCount==1)
		{
			//$con=mysqli_connect("localhost","root","","buy&get");
			$sql="INSERT INTO customers(name,email,password,phone,dob,gender,address) VALUES('$name','$email','$pass','$phone','$date','$address','$gender')";
			$sql1="INSERT INTO users(email,password) VALUES('$email','$pass')";
			mysqli_query(connection(),$sql);
			mysqli_query(connection(),$sql1);
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
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter your Full Name..." name="fullname" size="50" value="<?php echo $name;?>">
												<span class="error"><?php echo $nameErr;?></span>
<!--											
												<?php
//													if($_GET['msg'] === 'name_empty_error')
//													{
//														echo '<span class="error">*Name is required</span>';
//													}
//													elseif($_GET['msg'] === 'name_word_error')
//													{
//														echo '<span class="error">*Name at least two words</span>';
//													}
												?>
-->
											</td>		
										</tr>
										<tr>
											<td>
												<hr>
												<label>Email : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm" name="email" placeholder="&nbsp;Enter your Email here..." value="<?php echo $email;?>">
												<span class="error"><?php echo $emailErr;?></span>
												<?php
//													if($_GET['msge'] === 'email_empty_error')
//													{
//														echo '<span class="error">*Email is required</span>';
//													}
//													elseif($_GET['msge'] === 'email_space_error')
//													{
//														echo "<span class='error'>*Email can't take any space</span>";
//													}
//													elseif($_GET['msge'] === 'email_incorrect_error')
//													{
//														echo "<span class='error'>*You entered a incorrect Email address</span>";
//													}
												?>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm" name="password" placeholder="&nbsp;Paswword..." value="<?php echo $pass;?>">
												<span class="error"><?php echo $passErr;?></span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Confirm Password : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter your paswword..." name="cpassword" value="<?php echo $cpass;?>">
												<span class="error"><?php echo $cpassErr;?></span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Phone : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Enter mobile no ..." name="phone" value="<?php echo $phone;?>">
												<span class="error"><?php echo $phoneErr;?></span>
											</td>
										</tr>
										<tr>
											<td>
												<hr>
												<label>Birth Date : &nbsp;</label>
											</td>
											<td>
												<hr>
												<input type="date" class="myinput input-sm" name="date" value="<?php echo $date;?>">
												<span class="error"><?php echo $dateErr;?></span>
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
												<span class="error"><?php echo $genderErr;?></span>
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
												<input type="text" class="myinput input-sm"  placeholder="&nbsp;Flat/House No/Road No/Area ..." name="address" value="<?php echo $address;?>">
												<span class="error"><?php echo $dateErr;?></span>
												<hr>
											</td>
										</tr>
									</tbody>	
								</table>
								<span>Already have an account?<a href="signin.php"> Sign in</a></span><br>
								<input type="checkbox" name="checkBox">&nbsp;&nbsp;By creating an account you agree to our <a href="signup.php">Terms & Privacy</a>.
								<span class="error"><?php echo $checkBoxErr;?></span>
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
mysqli_query($con);
?>
