<?php

include 'connection.php';

function laptops_index_query()
{
	return mysqli_query(connection(),"SELECT * FROM laptops LIMIT 5");
}
function laptops_all_query()
{
	return mysqli_query(connection(),"SELECT * FROM laptops");
}
function laptops_id_query($id)
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE id=$id");
}

?>