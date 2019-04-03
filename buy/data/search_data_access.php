<?php
include 'connection.php';

function search_Box_Query()
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE header LIKE '".$_GET['str']."%'");
	
}

function search_By_Price()
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE special_price BETWEEN ".$_GET['str']."AND".$_GET['str']);
}

?>