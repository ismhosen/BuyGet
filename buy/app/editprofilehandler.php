<?php
session_start();
include '../data/users_data_access.php';
include 'common.php';
myLink();
$name=$_POST['name'];
$email=$_SESSION['user']['email'];
$oldpass=$_POST['oldpassword'];
$newpass=$_POST['newpassword'];
$cpass=$_POST['cpassword'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$address=$_POST['address'];

if(isset($_POST['update_profile']))
{
    // echo "<script>alert='Successfully Updated'</script>";
    // $phone1 = validate_update_phone($phone);
    // $name1 = validate_update_name($name);
    if($phone1 == "" && $name1 == "")
		{
            // echo "<script>alert='Successfully Updated'</script>";
            update_Query($name,$email,$phone,$date,$address);
            // echo "<script>alert='Successfully Updated'</script>";
            $_SESSION['user']['name']=$name;
            $_SESSION['user']['phone']=$phone;
            $_SESSION['user']['dob']=$date;
            $_SESSION['user']['address']=$address;
            // $_SESSION['user']['imgname']=$imgname;
            echo "<script>document.location='userprofile.php';</script>";
            
		}
		else
		{
			echo "<script>document.location='userprofile.php';</script>";
		}
}
elseif(isset($_POST['update_password']))
{
    
    // $pass1 = validate_update_password($newpass,$cpass);
    // if($pass1=="")
    // {
        // echo "hello". $email." ". $newpass ;
        if(!empty($newpass) && !empty($cpass))
        {
            // echo "error";
            // update_password_Query($email,$newpass);
            // echo "<script>document.location='userprofile.php';</script>";
            if($newpass==$cpass)
            {
                $_SESSION['user']['password']=$newpass;
                update_password_Query($email,$newpass);
            echo "<script>document.location='userprofile.php';</script>";
            }
            else
            {
                echo "<script>alert('passwort doesn\'t match')</script>";
                echo "<script>document.location='userprofile.php';</script>";
            }
        }
        else
        {
            // echo "hello";
            echo "<script>alert('passwort can\'t be empty')</script>";
            echo "<script>document.location='userprofile.php';</script>";
        }
        
        // echo "<script>alert='Successfully Updated'</script>";
        // $_SESSION['user']['password']=$newpass;
         
    // }
}
else
{
    echo "<script>document.location='index.php';</script>";
}
