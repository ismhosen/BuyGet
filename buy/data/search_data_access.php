<?php
include 'connection.php';

function search_Box_Query()
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE header LIKE '".$_GET['str']."%'");	
}
function owner_search_products_Query($email)
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE header LIKE '".$_GET['str']."%' AND owner_email=$email");	
}

function search_By_Brand($asus_brand,$accer_brand,$i3_brand)
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE status='1' AND (brand LIKE '%".$asus_brand."%' OR brand LIKE '%".$accer_brand."%') AND (processor LIKE '%".$i3_brand."%')");
}
function search_By_Price()
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE special_price BETWEEN ".$_GET['str']."AND".$_GET['str']);
}

?>