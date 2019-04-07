<?php
session_start();
require '../service/users_validation_service.php';
include 'common.php';
myLink();
$name=$_POST['fullname'];
$email=$_SESSION['user']['email'];
$oldpass=$_POST['oldpassword'];
$newpass=$_POST['newpassword'];
$cpass=$_POST['cpassword'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$address=$_POST['address'];

if(isset($_POST['update_profile']))
{
    $phone1 = validate_update_phone($phone);
    $name1 = validate_update_name($name);
    if($phone1 == "" && $name1 == "")
		{
            update_Query($name,$email,$phone,$date,$address);
            echo "<script>alert='Successfully Updated'</script>";
            $_SESSION['user']['name']=$name;
            $_SESSION['user']['phone']=$phone;
            $_SESSION['user']['dob']=$date;
            $address=$_SESSION['user']['address']=$address;
            // $imgname=$_SESSION['user']['imgname'];
            echo "<script>document.location='userprofile.php';</script>";
            
		}
		else
		{
			echo "<script>document.location='?msgname=$name1 & msgphone=$phone1';</script>";
		}
}
elseif(isset($_POST['update_password']))
{
    $pass1 = validate_update_password($newpass,$cpass);
    if($pass1=="")
    {
        echo "hello". $email." ". $newpass ;
        update_password_Query($email,$newpass);
        // echo "<script>alert='Successfully Updated'</script>";
        // $_SESSION['user']['password']=$newpass;
        // echo "<script>document.location='userprofile.php';</script>";
    }
}
else
{
    echo "<script>document.location='index.php';</script>";
}
