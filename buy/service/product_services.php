<?php 
include '../data/products_data_access.php';
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
