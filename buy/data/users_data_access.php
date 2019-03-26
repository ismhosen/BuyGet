<?php
include 'connection.php';

function signin_Query($email,$pass)
{
	return mysqli_query(connection(),"SELECT * FROM users WHERE email='$email' AND password='$pass'");
}
function signup_Query($name,$email,$pass,$phone,$date,$gender,$address)
{
	$address=mysqli_real_escape_string(connection(),$address);
	$sql="INSERT INTO customers(name,email,password,phone,dob,gender,address) VALUES('$name','$email','$pass','$phone','$date','$gender','$address')";
	$sql1="INSERT INTO users(email,password) VALUES('$email','$pass')";
	mysqli_query(connection(),$sql);
	mysqli_query(connection(),$sql1);
}
function email_Query($email)
{
	return mysqli_query(connection(),"SELECT * FROM customers WHERE email='$email'");
}

?>