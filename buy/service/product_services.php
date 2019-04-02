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
?>