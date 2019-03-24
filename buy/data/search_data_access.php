<?php
include 'connection.php';

function searchBoxQuery($search)
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE header LIKE '%$search%'");
	
}

?>