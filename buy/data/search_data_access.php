<?php
include 'connection.php';

function search_Box_Query($search)
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE header LIKE '%$search%'");
	
}

?>