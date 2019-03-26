<?php
session_start();
require '../service/users_service.php';
$nameErr=$emailErr=$passErr=$cpassErr=$phoneErr=$dateErr=$addresErr=$genderErr=$emailErrspace="";
$errCount=1;
$name=$_POST['fullname'];
$_SESSION['name'] = $name;
$email=$_POST['email'];
$_SESSION['email'] = $email;
$pass=$_POST['password'];
$_SESSION['password'] = $pass;
$cpass=$_POST['cpassword'];
$_SESSION['cpassword'] = $cpass;
$phone=$_POST['phone'];
$_SESSION['phone'] = $phone;
$date=$_POST['date'];
$_SESSION['date'] = $date;
$address=$_POST['address'];
$_SESSION['address'] = $address;
$gender=$_POST['gender'];
$_SESSION['gender'] = $gender;
$checkBox=$_POST['checkBox'];
	if(isset($_POST['submit']))
	{

		
		$ch = validate_signup_checkbox($checkBox);
		$add = validate_signup_address($address);
		$gen = validate_signup_gender($gender);
		$date1 = validate_signup_date($date);
		$phone1 = validate_signup_phone($phone);
		$pass1 = validate_signup_password($pass,$cpass);
		$email1 = validate_signup_email($email);
		$name1 = validate_signup_name($name);
		if($ch == "" && $add == "" && $gen == "" && $date1 == "" && $phone1 == "" && $pass1 == "" && $email1 == "" && $name1 == "")
		{
			signup_Query($name,$email,$pass,$phone,$date,$gender,$address);
			echo "<script>document.location='signin.php';</script>";
			$_SESSION['name'] = "";
			$_SESSION['email'] = "";
			$_SESSION['password'] = "";
			$_SESSION['cpassword'] = "";
			$_SESSION['phone'] = "";
			$_SESSION['date'] = "";
			$_SESSION['address'] = "";
			$_SESSION['gender'] = "";

		}
		else
		{
			echo "<script>document.location='signup.php?msgname=$name1 & msgemail=$email1 & msgpass=$pass1 & msgphone=$phone1 & msgdate=$date1 & msggender=$gen & msgaddress=$add & msgcheckbox=$ch';</script>";
		}
		
	}
?>