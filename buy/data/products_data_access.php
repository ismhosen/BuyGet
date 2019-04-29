<?php

include_once 'connection.php';

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
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE id='$id'");
}
function laptops_model_query($model)
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE model='$model'");
}
function order_By_Date()
{
	return mysqli_query(connection(),"SELECT * FROM laptops ORDER BY date ASC LIMIT 5");
}
function order_By_Discount()
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE discount_price > 0");
}
function owner_id($id)
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE owner_id='$id'");
}
function get_owner_name($id)
{
	return mysqli_query(connection(),"SELECT * FROM customers WHERE id='$id'");
}
// function get_owner_email_id($email)
// {
// 	return mysqli_query(connection(),"SELECT id FROM customers WHERE email='$email'");
// }
function products_id($id)
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE id='$id'");
}

function products_update($id,$brand,$model,$header,$processor,$gen,$clock_speed,$cache,$d_type,$d_size,$d_res,$touch,$r_type,$ram,$storage,$g_chipset,$g_memory,$networking,$d_port,$a_port,$u_port,$battery,$weight,$color,$os,$others,$part_no,$origin,$assemble,$warranty,$upcoming,$gifts,$r_price,$s_price,$d_price,$quantity,$status,$imgname,$existing_image)
{
	// echo "<script>alert('hello')</script>";
	if ($imgname=='') {
		$imgname = $existing_image;
	}
	return mysqli_query(connection(),"UPDATE laptops SET brand='$brand', model='$model', header='$header', processor='$processor', generation='$gen', clock_speed='$clock_speed', cache='$cache', display_type='$d_type', display_size='$d_size', display_resolution='$d_res', touch='$touch', ram_type='$r_type', ram='$ram', storage='$storage', graphics_chipset='$g_chipset', graphics_memory='$g_memory', networking='$networking', display_port='$d_port', audio_port='$a_port', usb_port='$u_port', battery='$battery', weight='$weight', color='$color', operating_system='$os', others='$others', part_no='$part_no', origin='$origin', assemble='$assemble', warranty='$warranty', upcoming='$upcoming', gifts='$gifts', main_image='$imgname', regular_price='$r_price', special_price='$s_price', discount_price='$d_price', quantity='$quantity', status='$status' WHERE id='$id'");	
}

function products_duplicate($u_id,$brand,$model,$header,$processor,$gen,$clock_speed,$cache,$d_type,$d_size,$d_res,$touch,$r_type,$ram,$storage,$g_chipset,$g_memory,$networking,$d_port,$a_port,$u_port,$battery,$weight,$color,$os,$others,$part_no,$origin,$assemble,$warranty,$upcoming,$gifts,$r_price,$s_price,$d_price,$quantity,$status,$dup_image)
{
	return mysqli_query(connection(),"INSERT INTO laptops(owner_id,brand,model,header,processor,generation,clock_speed,cache,display_type,display_size,display_resolution,touch,ram_type,ram,storage,graphics_chipset,graphics_memory,networking,display_port,audio_port,usb_port,battery,weight,color,operating_system,others,part_no,origin,assemble,warranty,upcoming,gifts, main_image, regular_price,special_price,discount_price,quantity,status) VALUES('$u_id','$brand','$model','$header','$processor','$gen','$clock_speed','$cache','$d_type','$d_size','$d_res','$touch','$r_type','$ram','$storage','$g_chipset','$g_memory','$networking','$d_port','$a_port','$u_port','$battery','$weight','$color','$os','$others','$part_no','$origin','$assemble','$warranty','$upcoming','$gifts', '$dup_image','$r_price','$s_price','$d_price','$quantity','$status')");
}

function products_add($owner_id,$brand,$model,$header,$processor,$gen,$clock_speed,$cache,$d_type,$d_size,$d_res,$touch,$r_type,$ram,$storage,$g_chipset,$g_memory,$networking,$d_port,$a_port,$u_port,$battery,$weight,$color,$os,$others,$part_no,$origin,$assemble,$warranty,$upcoming,$gifts,$r_price,$s_price,$d_price,$quantity,$status,$imgname)
{
	return mysqli_query(connection(),"INSERT INTO laptops(owner_id,brand,model,header,processor,generation,clock_speed,cache,display_type,display_size,display_resolution,touch,ram_type,ram,storage,graphics_chipset,graphics_memory,networking,display_port,audio_port,usb_port,battery,weight,color,operating_system,others,part_no,origin,assemble,warranty,upcoming,gifts,main_image,regular_price,special_price,discount_price,quantity,status) VALUES('$owner_id','$brand','$model','$header','$processor','$gen','$clock_speed','$cache','$d_type','$d_size','$d_res','$touch','$r_type','$ram','$storage','$g_chipset','$g_memory','$networking','$d_port','$a_port','$u_port','$battery','$weight','$color','$os','$others','$part_no','$origin','$assemble','$warranty','$upcoming','$gifts','$imgname','$r_price','$s_price','$d_price','$quantity','$status')");
}

function products_delete($id)
{
	return mysqli_query(connection(),"DELETE FROM laptops WHERE id='$id'");
}

function get_cart($id)
{
	// echo "<script>alert($id)</script>";
	return mysqli_query(connection(),"SELECT cart.c_id, cart.quantity, cart.customer_id, cart.product_id,laptops.special_price, laptops.header, laptops.main_image, laptops.id FROM cart INNER JOIN laptops WHERE cart.product_id=laptops.id  AND cart.customer_id='$id'");
}
function get_order_cart($id,$p_id)
{
	// echo "<script>alert($id)</script>";
	return mysqli_query(connection(),"SELECT cart.c_id, cart.quantity, cart.customer_id, cart.product_id,laptops.special_price, laptops.header, laptops.main_image, laptops.id FROM cart INNER JOIN laptops WHERE cart.product_id=laptops.id  AND cart.customer_id=$id AND cart.product_id='$p_id'");
}
function update_quantity($quantity,$c_id)
{
	return mysqli_query(connection(),"UPDATE cart SET quantity='$quantity' WHERE c_id='$c_id'");
}
function delete_cart($c_id)
{
	return mysqli_query(connection(),"DELETE FROM cart WHERE c_id='$c_id'");
}
function delete_cart_all($id)
{
	return mysqli_query(connection(),"DELETE FROM cart WHERE customer_id='$id'");
}
function add_to_cart($id,$product_id)
{
	return mysqli_query(connection(),"INSERT INTO cart(product_id,customer_id,quantity) VALUES('$product_id','$id','1')");
}

function get_bookmark($id)
{
	// echo "<script>alert($id)</script>";
	return mysqli_query(connection(),"SELECT bookmark.b_id, bookmark.customer_id, bookmark.product_id,laptops.special_price, laptops.header, laptops.main_image, laptops.id FROM bookmark INNER JOIN laptops WHERE bookmark.product_id=laptops.id  AND bookmark.customer_id='$id'");
}
function delete_bookmark($b_id)
{
	return mysqli_query(connection(),"DELETE FROM bookmark WHERE b_id='$b_id'");
}
function delete_bookmark_all($id)
{
	return mysqli_query(connection(),"DELETE FROM bookmark WHERE customer_id='$id'");
}
function bookmark($id,$product_id)
{
	return mysqli_query(connection(),"INSERT INTO bookmark(product_id,customer_id) VALUES('$product_id','$id')");
}
function product_cart_check($p_id,$u_id)
{
	return mysqli_query(connection(),"SELECT * FROM cart WHERE product_id='$p_id' AND customer_id='$u_id'");
}
function product_bookmark_check($p_id,$u_id)
{
	return mysqli_query(connection(),"SELECT * FROM bookmark WHERE product_id='$p_id' AND customer_id='$u_id'");
}
function owner_id_query($p_id)
{
	return mysqli_query(connection(),"SELECT owner_id FROM laptops WHERE id='$p_id'");
}
function order($p_id,$owner_id,$u_id,$price,$quantity,$name,$address,$mobile,$email,$comment)
{
	return mysqli_query(connection(),"INSERT INTO orders(product_id,owner_id,customer_id,price,quantity,name,address,mobile,email,comment) VALUES('$p_id','$owner_id','$u_id','$price','$quantity','$name','$address','$mobile','$email','$comment')");
}

function owner_order_id($id)
{
	// echo "<script>alert($id)</script>";
	return mysqli_query(connection(),"SELECT orders.product_id, orders.customer_id, orders.price, orders.quantity,orders.name, orders.address, orders.mobile, orders.email, orders.comment, laptops.main_image, laptops.model FROM orders INNER JOIN laptops WHERE orders.product_id=laptops.id  AND orders.owner_id='$id'");
}

function owner_order()
{
	return mysqli_query(connection(),"SELECT orders.product_id, orders.customer_id, orders.price, orders.quantity,orders.name, orders.address, orders.mobile, orders.email, orders.comment, laptops.main_image, laptops.model FROM orders INNER JOIN laptops WHERE orders.product_id=laptops.id ");
}

function get_all_laptop()
{
	return mysqli_query(connection(),"SELECT * from laptops");
}
?>