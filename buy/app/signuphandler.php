<?php
session_start();
include '../data/connection.php';
$nameErr=$emailErr=$passErr=$cpassErr=$phoneErr=$dateErr=$addresErr=$genderErr=$emailErrspace="";
$errCount=1;
$name=$_POST['fullname'];
$_SESSION['name'] = $name;
$email=$_POST['email'];
$_SESSION['email'] = $email;
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$address=$_POST['address'];
$gender=$_POST['gender'];
	if(isset($_POST['submit']))
	{
		
		$name1=$_POST['fullname'];
//		echo "<script>alert($pass)</script>";
//		echo "<script>alert($name1)</script>";
		if(empty($name))
		{
			//echo "<script>alert('hello')</script>";'
			
			$nameErr = "Name is required";
			$errCount++;
			header('location','signup.php?msg=name_require_error');
		}
		else
		{
			
			$word=str_word_count($name);
			if($word<2)
			{
				
				$nameErr = "*Name at least two words";
				$errCount++;
				header('location','signup.php?msg=name_word_error');
			}
		}
		
		
		if($email=="")
		{
			
			$emailErr = "Email is required";
			$errCount++;
			header('location','signup.php?msg=email_require_error');
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
				echo "<script>alert('hello')</script>";
			}
			else
			{
				if($emailErrlocal==1)
				{
					//$emailErr = "Email can't take any space";
					$errCount++;
					header('location','signup.php?msg=email_space_error');
				}
				else
				{
					//$emailErr = "You entered a incorrect Email address";
					$errCount++;
					header('location','signup.php?msg=email_incorrect_error');
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
			$sql="INSERT INTO customers(name,email,password,phone,dob,gender,address) VALUES('$name','$email','$pass','$phone','$date','$gender','$address')";
			$sql1="INSERT INTO users(email,password) VALUES('$email','$pass')";
			mysqli_query(connection(),$sql);
			mysqli_query(connection(),$sql1);
			header('location','signup.php');
		}
		
	}
?>