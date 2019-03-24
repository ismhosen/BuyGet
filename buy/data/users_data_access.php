<?php
include 'connection.php';

function signinQuery($email,$pass)
{
	return mysqli_query(connection(),"SELECT * FROM users WHERE email='$email' AND password='$pass'");
}

?>