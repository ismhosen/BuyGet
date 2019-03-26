<?php
include '../data/search_data_access.php';
include 'common.php';
$search=$_GET['searchBox'];
myLink();
?>
<html>
	<head>
		<style>
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
				margin-right: 39px;
				
				background: #fff;
				padding: 10px 15px;
				-webkit-box-shadow: 0 0 10px rgba(32, 80, 223, .2);
    			box-shadow: 0 0 10px rgba(32, 80, 223, .2);
			}
			.productdiv:hover
			{
				transition: all .3s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(32, 80, 223, .4);
    			box-shadow: 0 0 10px rgba(32, 80, 223, .4);
			}
			.text-style
			{
				font-size: 15px;
			}
		</style>
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
						//$query1=mysqli_query(connection(),"SELECT * FROM laptops LIMIT 5");
						$query1=search_Box_Query($search);
						$rows1=mysqli_num_rows($query1);
						if($rows1>0)
						{
							while($row=mysqli_fetch_assoc($query1))  
							{
						
						?>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box" style="height:305px;">
								<img src="images/<?php echo $row['main_image'];?>" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="index.php?id=<?php echo $row['id'];?>"><span style="cursor: pointer;"><?php echo $row['header']?> </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<?php }}
						else
						{
							echo "Null Given";
						}
						?>
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="background: none;valign:bottom;">
							<a href="discountproducts.php"><span>See all</span></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</body>
</html><br><br><br><br><br><br><br><br>
	
