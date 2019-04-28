<?php
session_start();
include '../data/users_data_access.php';

function validate_signin_from_db($email,$pass)
{
	$types="";
	if($email=="")
	{
		header('location: signin.php?msg=email_empty');
	}
	elseif($pass=="")
	{
		header('location: signin.php?msg=pass_empty');
	}
	else
	{
		$signin_Query = signin_Query($email,$pass);
		$rows=mysqli_num_rows($signin_Query);
		if($rows==1)
		{
			while($row=mysqli_fetch_assoc($signin_Query))  
			{
				$types=$row['type'];
				$_SESSION['type']=$types;
				$_SESSION['signin']=true;
				// echo "<script>alert('$types')</script>";
			}
			
			$query=email_Query($email);
			while($row=mysqli_fetch_assoc($query))  
			{
               $user=array(
				   'id'=>$row['id'],
				   'name'=>$row['name'],
				   'email'=>$row['email'],
				   'password'=>$row['password'],
				   'phone'=>$row['phone'],
				   'dob'=>$row['dob'],
				   'gender'=>$row['gender'],
				   'address'=>$row['address'],
				   'imgname'=>$row['imgname']
			   );
			//    echo "<script>alert('gfh')</script>";
				// $user=json_encode($user_json);
				// var_dump ($user['email']);
				// var_dump ($user);
				$_SESSION['user']=$user;
			}
			if($types=="buyer")
			{
				echo "<script>document.location='homepagebuyer.php';</script>";
			}
			else if(($types=="seller"))
			{
				echo "<script>document.location='homepageseller.php';</script>";
			}
			else if(($types=="admin"))
			{
				echo "<script>document.location='homepageadmin.php';</script>";
			}
			// header('location: userhomepage.php?email='.$_SESSION['user']['email']);
			
		}
		else
		{
			header('location: signin.php?msg=error');
		}
	}
}

function validate_unique_email($email)
{
	$query=email_Query($email);
	$rows1=mysqli_num_rows($query);
	if($rows1>0)
	{
		return false;
	}
	else
		return true;
}
function validate_signup_imgname($imgname)
{
	if(empty($imgname))
	{
		return "*Image required";
	}
	return "";
}
function validate_signup_name($name)
{
	if(empty($name))
	{
		return "*Name is required";
	}
	else
	{
		$word=str_word_count($name);
		if($word<2)
		{
			return "*Name at least two words";
		}
	}
	return "";
	
}

function validate_signup_email($email)
{
	if(empty($email))
	{
		return "*Email is required";
	}
	else if(!validate_unique_email($email))
	{
		return "*Email already registered";
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
				return "*Email Required";
			}
			else
			{
						return "*Incorrect email address";
			}
		}
	}
	return "";
}

function validate_signup_password($pass,$cpass)
{
	if($pass==""||$cpass=="")
	{
				return "*Password is required";
	}
	else
	{
		
		$passErrlocal=0;
		//var_dump(strlen($pass) != 5);
		if(strlen($pass) != 5) 
		{
					return "*Password must be five (5) characters";	
		}
		elseif(!(count((explode("@",$pass)))>=2||count(explode("#",$pass))>=2||count(explode("$",$pass))>=2||count(explode("%",$pass))>=2))
		{
					return "*Password must contain at least one of the special characters (@, #, $, %)";
		}
		elseif($pass!=$cpass)
		{
					return "*Password doesn't match";
		}
	}
	return "";
}

function validate_signup_phone($phone)
{
	if($phone=="")
	{
				return "*Mobile No is required";
	}
	else
	{
		if(strlen($phone) != 11) 
		{
					return "*Mobile no must be (11) characters";
		}
	}
	return "";
}

function validate_signup_date($date)
{
	if($date=="")
	{
				return "*Birth date is required";
	}
	return "";
}

function validate_signup_address($address)
{
	if($address=="")
	{
						return "*Address is required";
	}
	return "";
}

function validate_signup_gender($gender)
{
	if($gender=="")
	{
				return "*Gender is required";
	}
	return "";
}

function validate_signup_checkbox($checkBox)
{
	if($checkBox=="")
	{
				return "*Check required";
	}
	return "";
}
function validate_update_name($name)
{
	$word=str_word_count($name);
	if($word<2)
	{
		return "*Name at least two words";
	}
	return "";
}
function validate_update_password($pass,$cpass)
{
	if($pass==""||$cpass=="")
	{
		return "*Password is required";
	}
	else
	{
		$passErrlocal=0;
		//var_dump(strlen($pass) != 5);
		if(strlen($pass) != 5) 
		{
			return "*Password must be five (5) characters";	
		}
		elseif(!(count((explode("@",$pass)))>=2||count(explode("#",$pass))>=2||count(explode("$",$pass))>=2||count(explode("%",$pass))>=2))
		{
			return "*Password must contain at least one of the special characters (@, #, $, %)";
		}
		elseif($pass!=$cpass)
		{
			return "*Password doesn't match";
		}
	}
	return "";
}
function validate_update_phone($phone)
{
	if(strlen($phone) != 11) 
	{
				return "*Mobile no must be (11) characters";
	}
	return "";
}

?>