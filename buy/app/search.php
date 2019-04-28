<?php
include '../data/search_data_access.php';
include 'common.php';
$search=$_GET['str'];
myLink();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="commoncss.css">
	</head>
	<body>
		<div class="products">
			<div class="search-products">
				<div class="container">
					<br>
					<span class="search-products-text">Search Products</span>
					<br><br>
					<div class="row text-center">
						<?php 
						
						$query1=search_Box_Query();
						$rows1=mysqli_num_rows($query1);
						if($rows1>0)
						{
							while($row=mysqli_fetch_assoc($query1))  
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
	
