<?php
include '../data/search_data_access.php';
// include '../data/connection.php';
include 'common.php';
$asus_brand=$_GET['asus_brand'];
$accer_brand=$_GET['accer_brand'];
$dell_brand=$_GET['dell_brand'];
$hp_brand=$_GET['hp_brand'];
$lenovo_brand=$_GET['lenovo_brand'];
$microsoft_brand=$_GET['microsoft_brand'];
$macbook_brand=$_GET['macbook_brand'];
$razer_brand=$_GET['razer_brand'];
$ilife_brand=$_GET['ilife_brand'];
$i3_brand=$_GET['i3_brand'];
// $brands=$_GET['brands'];


myLink();
?>
<html>
	<head>
		<style>
			body
			{
				background: #e6f0ff;
			}
			.products
			{
				background: #e6f0ff;
			}
			.search-products-text
			{
				font-size: 17;			
				color: #4d94ff;
			}
			.productdiv
			{
				width: 205px;
				margin-right: 5px;
				margin-bottom: 15px;
				border: 1px solid 10px rgba(32, 80, 223, .2);;
				background: #fff;
				padding: 10px 15px;
				-webkit-box-shadow: 0 0 10px rgba(32, 80, 223, .2);
    			box-shadow: 0 0 10px rgba(32, 80, 223, .2);
			}
			.productdiv:hover
			{
				transition: all .3s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(32, 80, 223, .4);
    			box-shadow: 0 0 10px rgba(32, 80, 223, .5);
			}
			.text-style
			{
				font-size: 15px;
			}
		</style>
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
						// // var_dump(count($brands));
						// for($i=0; $i<count($brands); $i++)
						// {
						// 	// echo $brands[$i]->brand;
						// }

						$query1=search_By_Brand($asus_brand,$accer_brand,$i3_brand);
						$query="SELECT * FROM laptops WHERE status='1'";
						// var_dump($asus_brand);
						$flag = 0;
						for($i=0; $i<count($brands); $i++)
						{
							echo $brands[$i]->value;
							if($brands[$i]->value == 1)
							{
								if($flag == 1)
								{
									$query .=" OR brand LIKE '%".$brands[$i]->brand."%'";
								}
								else
								{
									// echo "<script> console.log($i)</script>";
									$query .=" AND brand LIKE '%".$brands[$i]->brand."%'";
									$flag = 1;
								}
							}	
						}
						
						// if($asus_brand!="undefined" && !empty($asus_brand))
						// {
						// 	$query .=" OR brand LIKE '%".$asus_brand."%'";
						// }
						// if($accer_brand!="undefined" && !empty($accer_brand))
						// {
						// 	$query .=" OR brand LIKE '%".$accer_brand."%'";
						// }
						// if($i3_brand!="undefined" && !empty($i3_brand))
						// {
						// 	$query .=" AND processor LIKE '%".$i3_brand."%'";
						// }
						var_dump($query);
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
								<a href="index.php?id=<?php echo $row['id'];?>"><span style="cursor: pointer;"><?php echo $row['header']?> </span></a><br><br>
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
	
