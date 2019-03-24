<?php

include 'connection.php';

function laptops_index_query()
{
	return mysqli_query(connection(),"SELECT * FROM laptops LIMIT 5");
}

?>