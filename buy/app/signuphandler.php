<?php
session_start();
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

		if($email=="")
		{
			header('location: signup.php?msge=email_empty_error');
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
				
			}
			else
			{
				if($emailErrlocal==1)
				{
					header('location: signup.php?msge=email_space_error');
					$errCount++;
				}
				else
				{
					header('location: signup.php?msge=email_incorrect_error');
					$errCount++;
				}
			}
		}
		
		
//		echo "<script>alert($pass)</script>";
//		echo "<script>alert($name1)</script>";
//		header('location','signup.php?msg=nameerror');
		if(empty($name))
		{
			//echo "<script>alert('hello')</script>";
			$errCount++;
			header('location: signup.php?msg=name_empty_error');
		}
		else
		{
			$word=str_word_count($name);
			if($word<2)
			{
				$a=1;
				header('location: signup.php?msg=name_word_error');
				$errCount++;
			}
			
		}
//		
//		
//		if($pass==""||$cpass=="")
//		{
//			$passErr = "Password is required";
//			$errCount++;
//		}
//		else
//		{
//			//$pass=$_POST['password'];
//			$passErrlocal=0;
//			echo "<script>alert('ftrgrfedgtrf')</script>";
//			echo "<script>alert($pass)</script>";
//			if(strlen($pass) != 5) 
//			{
//				$errCount++;
//				$passErrlocal=1;
//				echo "<script>alert('less than 5 char '.$passErrlocal)</script>";
//			}
//			elseif(!(count((explode("@",$pass)))>=2||count(explode("#",$pass))>=2||count(explode("$",$pass))>=2||count(explode("%",$pass))>=2))
//			{
//				$errCount++;
//				$passErrlocal=2;
//				echo "<script>alert('@, #, $, % '. $passErrlocal)</script>";
//			}
//			elseif($pass!=$cpass)
//			{
//				$errCount++;
//				$passErrlocal=3;
//				echo "<script>alert('not match')</script>";
//			}
//			
//			if ($emailErrlocal==0) 
//			{
//				$pass=$_POST['password'];
//			}
//				
//				elseif ($passErrlocal==1) 
//				{
//					$passErr="Password must be five (5) characters";
//					//echo "<script>alert('ahsd')</script>";
//				}
//				elseif ($passErrlocal==2) 
//				{
//					$passErr="Password must contain at least one of the special characters (@, #, $, %)";
//				}
//				elseif ($passErrlocal==3) 
//				{
//					$cpassErr="Password doesn't match";
//				}
//			
//		}
//		if($cpass=="")
//		{
//			$passErr = "Password is required";
//			$cpassErr = "Password is required";
//			$errCount++;
//		}
//		else
//		{
//			
//		}
//		if($phone=="")
//		{
//			$phoneErr = "Mobile No is required";
//			$errCount++;
//		}
//		else
//		{
//			
//		}
//		if($date=="")
//		{
//			$dateErr = "Birth Date is required";
//			$errCount++;
//		}
//		else
//		{
//			
//		}
//		if($address=="")
//		{
//			$addressErr = "Adress is required";
//			$errCount++;
//		}
//		else
//		{
//			
//		}
//		
//		
	}
?>