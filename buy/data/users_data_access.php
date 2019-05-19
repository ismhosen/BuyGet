<?php
include_once 'connection.php';

function signin_Query($email,$pass)
{
	return mysqli_query(connection(),"SELECT * FROM users WHERE email='$email' AND password='$pass'");
}
function signup_Query($imgname,$name,$email,$pass,$phone,$date,$gender,$address,$types)
{
	$address=mysqli_real_escape_string(connection(),$address);
	$sql="INSERT INTO customers(name,email,password,phone,dob,gender,address,imgname) VALUES('$name','$email','$pass','$phone','$date','$gender','$address','$imgname')";
	$sql1="INSERT INTO users(email,password,type) VALUES('$email','$pass','$types')";
	mysqli_query(connection(),$sql);
	mysqli_query(connection(),$sql1);
}
function get_sender_name($id)
{
	// echo "<script>alert($id)</script>";
	$query=mysqli_query(connection(),"SELECT * from customers where id='$id'");
	$rows=mysqli_num_rows($query);
		if($rows==1)
		{
			while($row=mysqli_fetch_assoc($query))  
			{
				return $row['name'];
			}
		}
}
function update_Query($name,$email,$phone,$date,$address, $imgname)
{
	

	$address=mysqli_real_escape_string(connection(),$address);
	$sql="UPDATE customers SET name='$name', phone='$phone', dob='$date', address='$address', imgname='$imgname' WHERE email='$email'";
	mysqli_query(connection(),$sql);
}
function update_password_Query($email,$pass)
{
	// echo "hello". $email." ". $pass;
	$sql="UPDATE customers SET password='$pass' WHERE email='$email'";
	mysqli_query(connection(),$sql);
	$sql1="UPDATE users SET password='$pass' WHERE email='$email'";
	mysqli_query(connection(),$sql1);
}
function email_Query($email)
{
	return mysqli_query(connection(),"SELECT * FROM customers WHERE email='$email'");
}
function get_users()
{
	return mysqli_query(connection(),"SELECT * FROM customers");
}
function get_buyers()
{
	return mysqli_query(connection(),"SELECT * FROM users where type='buyer'");
}
function get_sellers()
{
	return mysqli_query(connection(),"SELECT * FROM users where type='seller'");
}
function get_all_users()
{
	return mysqli_query(connection(),"SELECT * FROM customers INNER JOIN users where customers.email=users.email");
}
function get_all_buyers()
{
	return mysqli_query(connection(),"SELECT * FROM customers INNER JOIN users where users.type='buyer' AND customers.email=users.email");
}
function get_all_sellers()
{
	return mysqli_query(connection(),"SELECT * FROM customers INNER JOIN users where users.type='seller' AND customers.email=users.email");
}
?>