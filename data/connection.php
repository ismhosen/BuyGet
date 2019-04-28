<?php
function connection()
{
	$con=mysqli_connect("localhost","root","","buy&get");
	return $con;
}

?>