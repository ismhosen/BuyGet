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
function owner_id($email)
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE owner_email=$email");
}
function get_owner_name($email)
{
	return mysqli_query(connection(),"SELECT * FROM customers WHERE email=$email");
}
function products_id($id)
{
	return mysqli_query(connection(),"SELECT * FROM laptops WHERE id='$id'");
}

function products_update($id,$brand,$model,$header,$processor,$gen,$clock_speed,$cache,$d_type,$d_size,$d_res,$touch,$r_type,$ram,$storage,$g_chipset,$g_memory,$networking,$d_port,$a_port,$u_port,$battery,$weight,$color,$os,$others,$part_no,$origin,$assemble,$warranty,$upcoming,$gifts,$r_price,$s_price,$d_price,$quantity,$status)
{
	// echo "<script>alert('hello')</script>";
	return mysqli_query(connection(),"UPDATE laptops SET brand='$brand', model='$model', header='$header', processor='$processor', generation='$gen', clock_speed='$clock_speed', cache='$cache', display_type='$d_type', display_size='$d_size', display_resolution='$d_res', touch='$touch', ram_type='$r_type', ram='$ram', storage='$storage', graphics_chipset='$g_chipset', graphics_memory='$g_memory', networking='$networking', display_port='$d_port', audio_port='$a_port', usb_port='$u_port', battery='$battery', weight='$weight', color='$color', operating_system='$os', others='$others', part_no='$part_no', origin='$origin', assemble='$assemble', warranty='$warranty', upcoming='$upcoming', gifts='$gifts', regular_price='$r_price', special_price='$s_price', discount_price='$d_price', quantity='$quantity', status='$status' WHERE id='$id'");	
}

function products_duplicate($email,$brand,$model,$header,$processor,$gen,$clock_speed,$cache,$d_type,$d_size,$d_res,$touch,$r_type,$ram,$storage,$g_chipset,$g_memory,$networking,$d_port,$a_port,$u_port,$battery,$weight,$color,$os,$others,$part_no,$origin,$assemble,$warranty,$upcoming,$gifts,$r_price,$s_price,$d_price,$quantity,$status,$date)
{
	return mysqli_query(connection(),"INSERT INTO laptops(owner_email,brand,model,header,processor,generation,clock_speed,cache,display_type,display_size,display_resolution,touch,ram_type,ram,storage,graphics_chipset,graphics_memory,networking,display_port,audio_port,usb_port,battery,weight,color,operating_system,others,part_no,origin,assemble,warranty,upcoming,gifts,regular_price,special_price,discount_price,quantity,status) VALUES('$email','$brand','$model','$header','$processor','$gen','$clock_speed','$cache','$d_type','$d_size','$d_res','$touch','$r_type','$ram','$storage','$g_chipset','$g_memory','$networking','$d_port','$a_port','$u_port','$battery','$weight','$color','$os','$others','$part_no','$origin','$assemble','$warranty','$upcoming','$gifts','$r_price','$s_price','$d_price','$quantity','$status')");
}

function products_add($email,$brand,$model,$header,$processor,$gen,$clock_speed,$cache,$d_type,$d_size,$d_res,$touch,$r_type,$ram,$storage,$g_chipset,$g_memory,$networking,$d_port,$a_port,$u_port,$battery,$weight,$color,$os,$others,$part_no,$origin,$assemble,$warranty,$upcoming,$gifts,$r_price,$s_price,$d_price,$quantity,$status,$imgname)
{
	return mysqli_query(connection(),"INSERT INTO laptops(owner_email,brand,model,header,processor,generation,clock_speed,cache,display_type,display_size,display_resolution,touch,ram_type,ram,storage,graphics_chipset,graphics_memory,networking,display_port,audio_port,usb_port,battery,weight,color,operating_system,others,part_no,origin,assemble,warranty,upcoming,gifts,main_image,regular_price,special_price,discount_price,quantity,status) VALUES('$email','$brand','$model','$header','$processor','$gen','$clock_speed','$cache','$d_type','$d_size','$d_res','$touch','$r_type','$ram','$storage','$g_chipset','$g_memory','$networking','$d_port','$a_port','$u_port','$battery','$weight','$color','$os','$others','$part_no','$origin','$assemble','$warranty','$upcoming','$gifts','$imgname','$r_price','$s_price','$d_price','$quantity','$status')");
}
function products_delete($id)
{
	return mysqli_query(connection(),"DELETE FROM laptops WHERE id='$id'");
}

?>