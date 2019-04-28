<?php
include 'connection.php';

function search_Box_Query()
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE header LIKE '%".$_GET['str']."%'");	
}
function owner_search_products_Query($id)
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE header LIKE '%".$_GET['str']."%' AND owner_id=$id");	
}
function owner_search_orders_products_Query($id)
{
	return mysqli_query(connection(),"SELECT laptops.main_image,laptops.model, laptops.header, laptops.owner_id, laptops.id, orders.product_id, orders.owner_id, orders.price, orders.quantity, orders.name, orders.email, orders.mobile, orders.address,orders.comment FROM laptops INNER JOIN orders WHERE laptops.header LIKE '%".$_GET['str']."%' AND laptops.owner_id= orders.owner_id AND laptops.id=orders.product_id");
}
function admin_search_all_orders_Query()
{
	return mysqli_query(connection(),"SELECT laptops.main_image,laptops.model, laptops.header, laptops.owner_id, laptops.id, orders.product_id, orders.owner_id, orders.price, orders.quantity, orders.name, orders.email, orders.mobile, orders.address,orders.comment FROM laptops INNER JOIN orders WHERE laptops.header LIKE '%".$_GET['str']."%' AND laptops.id=orders.product_id");
}
function admin_search_all_laptops()
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE header LIKE '%".$_GET['str']."%'");	
}

function owner_search_users_Query()
{
	return mysqli_query(connection(),"SELECT * FROM customers WHERE name LIKE '%".$_GET['str']."%'");	
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