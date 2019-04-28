<?php
include '../data/search_data_access.php';
// include '../data/connection.php';
include 'common.php';
$min_price=$_GET['min'];
$max_price=$_GET['max'];
// $brands=$_GET['brands'];


myLink();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="commoncss.css">
	</head>
	<body>
		<div class="produts">
			<div class="search-products">
				<div class="container">
					<span class="search-products-text">Search Products</span>
					<br><br>
					<div class="row text-center">
						<?php 
						$brands = isset($_REQUEST['brands']) ? json_decode($_REQUEST['brands']) : array();
						// $query1=search_By_Brand($asus_brand,$accer_brand,$i3_brand);
						$query="SELECT * FROM laptops WHERE status='1'";
						// var_dump($asus_brand);
						$flag = 0;
						for($i=0; $i<count($brands); $i++)
						{
							// echo $brands[$i]->value;
							if($brands[$i]->value == 1)
							{
								if($flag == 1)
								{
									$query .=" OR brand LIKE '%".$brands[$i]->brand."%'";
								}
								else
								{
									// echo "<script> console.log($i)</script>";
									$query .=" AND (brand LIKE '%".$brands[$i]->brand."%'";
									$flag = 1;
								}
								// if($i==count($brands))
							}	
						}
						if($flag==1)
						{
							$query .=")";
						}

						// $query.=$query3.$query2;
						$processors = isset($_REQUEST['processors']) ? json_decode($_REQUEST['processors']) : array();
						$flag = 0;
						for($i=0; $i<count($processors); $i++)
						{
							// echo $processors[$i]->value;
							if($processors[$i]->value == 1)
							{
								if($flag == 1)
								{
									$query .=" OR processor LIKE '%".$processors[$i]->processor."%'";
								}
								else
								{
									// echo "<script> console.log($i)</script>";
									$query .=" AND ( processor LIKE '%".$processors[$i]->processor."%'";
									$flag = 1;
								}
							}	
						}
						if($flag==1)
						{
							$query .=")";
						}

						$generations = isset($_REQUEST['generations']) ? json_decode($_REQUEST['generations']) : array();
						$flag = 0;
						for($i=0; $i<count($generations); $i++)
						{
							// echo $processors[$i]->value;
							if($generations[$i]->value == 1)
							{
								if($flag == 1)
								{
									$query .=" OR generation LIKE '%".$generations[$i]->generation."%'";
								}
								else
								{
									// echo "<script> console.log($i)</script>";
									$query .=" AND ( generation LIKE '%".$generations[$i]->generation."%'";
									$flag = 1;
								}
							}	
						}
						if($flag==1)
						{
							$query .=")";
						}

						$screensizes = isset($_REQUEST['screensizes']) ? json_decode($_REQUEST['screensizes']) : array();
						$flag = 0;
						for($i=0; $i<count($screensizes); $i++)
						{
							// echo $processors[$i]->value;
							if($screensizes[$i]->value == 1)
							{
								if($flag == 1)
								{
									$query .=" OR display_size LIKE '%".$screensizes[$i]->screensize."%'";
								}
								else
								{
									// echo "<script> console.log($i)</script>";
									$query .=" AND ( display_size LIKE '%".$screensizes[$i]->screensize."%'";
									$flag = 1;
								}
							}	
						}
						if($flag==1)
						{
							$query .=")";
						}

						$resolutions = isset($_REQUEST['resolutions']) ? json_decode($_REQUEST['resolutions']) : array();
						$flag = 0;
						for($i=0; $i<count($resolutions); $i++)
						{
							// echo $processors[$i]->value;
							if($resolutions[$i]->value == 1)
							{
								if($flag == 1)
								{
									$query .=" OR display_resolution LIKE '%".$resolutions[$i]->resolution."%'";
								}
								else
								{
									// echo "<script> console.log($i)</script>";
									$query .=" AND ( display_resolution LIKE '%".$resolutions[$i]->resolution."%'";
									$flag = 1;
								}
							}	
						}
						if($flag==1)
						{
							$query .=")";
						}

						$rams = isset($_REQUEST['rams']) ? json_decode($_REQUEST['rams']) : array();
						$flag = 0;
						for($i=0; $i<count($rams); $i++)
						{
							// echo $processors[$i]->value;
							if($rams[$i]->value == 1)
							{
								if($flag == 1)
								{
									$query .=" OR ram LIKE '%".$rams[$i]->ram."%'";
								}
								else
								{
									// echo "<script> console.log($i)</script>";
									$query .=" AND ( ram LIKE '%".$rams[$i]->ram."%'";
									$flag = 1;
								}
							}	
						}
						if($flag==1)
						{
							$query .=")";
						}

						$storages = isset($_REQUEST['storages']) ? json_decode($_REQUEST['storages']) : array();
						$flag = 0;
						for($i=0; $i<count($storages); $i++)
						{
							// echo $processors[$i]->value;
							if($storages[$i]->value == 1)
							{
								if($flag == 1)
								{
									$query .=" OR storage LIKE '%".$storages[$i]->storage."%'";
								}
								else
								{
									// echo "<script> console.log($i)</script>";
									$query .=" AND ( storage LIKE '%".$storages[$i]->storage."%'";
									$flag = 1;
								}
							}	
						}
						if($flag==1)
						{
							$query .=")";
						}

						$gpus = isset($_REQUEST['gpus']) ? json_decode($_REQUEST['gpus']) : array();
						$flag = 0;
						for($i=0; $i<count($gpus); $i++)
						{
							// echo $processors[$i]->value;
							if($gpus[$i]->value == 1)
							{
								if($flag == 1)
								{
									$query .=" OR graphics_memory LIKE '%".$gpus[$i]->gpu."%'";
								}
								else
								{
									// echo "<script> console.log($i)</script>";
									$query .=" AND ( graphics_memory LIKE '%".$gpus[$i]->gpu."%'";
									$flag = 1;
								}
							}	
						}
						if($flag==1)
						{
							$query .=")";
						}
						// var_dump($min_price,$max_price);
						// $flag = 0;
						if($min_price != "" && $max_price != "")
						{
							$query .=" AND ( regular_price BETWEEN $min_price AND $max_price)";
						}
						
						if($query=="SELECT * FROM laptops WHERE status='1'")
						{
							return "";
						}
						
						// var_dump($query);
					
						$result=mysqli_query(connection(),$query);
						// var_dump($query1);
						$rows1=mysqli_num_rows($result);
						if($rows1>0)
						{
							while($row=mysqli_fetch_assoc($result))  
							{
						
						?>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box" style="height:302px;">
								<img src="images/<?php echo $row['main_image'];?>" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="product_details.php?id=<?php echo $row['id'];?>"><span style="cursor: pointer;"><?php echo $row['header']?> </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<?php }}
						else
						{
							echo "No result found";
						}
						?>
						
					</div>

				</div>
			</div>
		</div>
	</body>
</html>
	
