<?php 
include_once '../data/products_data_access.php';
	function get_title($id)
	{
		$query=laptops_id_query($id);
		$rows1=mysqli_num_rows($query);
		if($rows1>0)
		{
			while($row=mysqli_fetch_assoc($query))  
			{
				echo "<title>".$row['model']."</title>";
			}
		}
	}
	function get_owner_id($p_id)
	{
		$query=owner_id_query($p_id);
		$rows1=mysqli_num_rows($query);
		if($rows1>0)
		{
			while($row=mysqli_fetch_assoc($query))  
			{
				return $row['owner_id'];
			}
		}
	}
	// function get_owner_id($p_id)
	// {
	// 	$query=owner_id_query($p_id);
	// 	$rows1=mysqli_num_rows($query);
	// 	if($rows1>0)
	// 	{
	// 		while($row=mysqli_fetch_assoc($query))  
	// 		{
	// 			return $row['owner_id'];
	// 		}
	// 	}
	// }
	function model_validate($model)
	{
		$query=laptops_model_query($model);
		$rows1=mysqli_num_rows($query);
		if($rows1>0)
		{
			return false;
		}
		return true;
	}
	function image_mvoe($imgname)
	{
		$fileName=$_FILES['$imgname']['name'];
		$tempName=$_FILES['$imgname']['temp_name'];

			if(!empty($fileName))
			{
				$location="../app/images/";
				move_uploaded_file($tempName,$location.$fileName);
			}
		
	}
	function owner_name($id)
	{
		$query=get_owner_name($id);
		$rows1=mysqli_num_rows($query);
		if($rows1>0)
		{
			while($row=mysqli_fetch_assoc($query))  
			{
				echo $row['name'];
			}
		}
	}

	function check_cart($p_id,$c_id)
	{
		
		$query=product_cart_check($p_id,$c_id);
		$rows1=mysqli_num_rows($query);
		if($rows1>0)
		{
			return "error";
		}
		else
			return "";
	}
