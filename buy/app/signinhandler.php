<?php
session_start();
require '../service/user_service.php';
$emailErr=$passErr="";
$errCount=1;
$email=$_POST['email'];
$pass=$_POST['password'];


if(isset($_POST['submit']))
{

	echo '<script>alert("message successfully sent")</script>';
	validate_login_from_db($email,$pass);
	
}


?>