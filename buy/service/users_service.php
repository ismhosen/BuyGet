<?php
	
include '../data/users_data_access.php';

function validate_signin_from_db($email,$pass)
{
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
		$rows=mysqli_num_rows(signinQuery($email,$pass));
		if($rows==1)
		{
			$_SESSION['email']=$email;
			header('location: userhomepage.php');
		}
		else
		{
			header('location: signin.php?msg=error');
		}
	}
	
}

?>