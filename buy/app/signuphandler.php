<?php
session_start();
require '../service/users_validation_service.php';
$nameErr=$emailErr=$passErr=$cpassErr=$phoneErr=$dateErr=$addresErr=$genderErr=$emailErrspace="";
$errCount=1;
$types=$_POST['types'];

$imgname=$_FILES['imgname']['name'];
$imgname_temp=$_FILES['imgname']['tmp_name'];

$_SESSION['imgname'] = $imgname;
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
		$img=validate_signup_imgname($imgname);
		$ch = validate_signup_checkbox($checkBox);
		$add = validate_signup_address($address);
		$gen = validate_signup_gender($gender);
		$date1 = validate_signup_date($date);
		$phone1 = validate_signup_phone($phone);
		$pass1 = validate_signup_password($pass,$cpass);
		$email1 = validate_signup_email($email);
		$name1 = validate_signup_name($name);
		if($ch == "" && $add == "" && $gen == "" && $date1 == "" && $phone1 == "" && $pass1 == "" && $email1 == "" && $name1 == "" && $img == "")
		{

			$pass = md5($pass);

			signup_Query($imgname,$name,$email,$pass,$phone,$date,$gender,$address,$types);
			echo "<script>document.location='signin.php';</script>";
			$_SESSION['name'] = "";
			$_SESSION['email'] = "";
			$_SESSION['password'] = "";
			$_SESSION['cpassword'] = "";
			$_SESSION['phone'] = "";
			$_SESSION['date'] = "";
			$_SESSION['address'] = "";
			$_SESSION['gender'] = "";


			move_uploaded_file($imgname_temp, "images/$imgname");

		}
		else
		{
			echo "<script>document.location='signup.php?msgname=$name1 & msgimg=$img & msgemail=$email1 & msgpass=$pass1 & msgphone=$phone1 & msgdate=$date1 & msggender=$gen & msgaddress=$add & msgcheckbox=$ch';</script>";
		}
		
	}
?>