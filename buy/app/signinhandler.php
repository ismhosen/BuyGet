<?php
session_start();
require '../service/users_validation_service.php';
$emailErr=$passErr="";
$errCount=1;
$email=$_POST['email'];
$pass=$_POST['password'];


if(isset($_POST['submit']))
{
	if($pass=="admin")
	{
		validate_signin_from_db($email,$pass);
	}
	else
	{
		$pass = md5($pass);
		validate_signin_from_db($email,$pass);
	}
	
	
}


?>