<?php
echo "<title>New Products</title>";
include_once 'common.php';
include_once '../data/products_data_access.php';
include_once '../service/product_services.php';
include_once '../data/cart_data_access.php';
session_start();
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];
$rows1=mysqli_num_rows(get_cart($id));
myLink();
if($email=="")
{
	myHeader();
}
else if($_SESSION['type']=="seller")
{
	sellerheader($name,$imgname);
}
else if($_SESSION['type']=="buyer")
{
	buyerheader($name,$imgname,$rows1);
}
mySearch();
?>
<html>
	<head>
		<style>
			.products
			{
				margin-top: 120px;
				background: #e6f0ff;
			}
			.new-products-text
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
		<div class="products">
			<div class="new-products">
				<div class="container">
					<br>
					<span class="new-products-text">New Products</span>
					<br><br>
					<div class="row text-center">
						<?php

						$query1=order_By_Date();
						$rows1=mysqli_num_rows($query1);
						if($rows1>0)
						{
							while($row=mysqli_fetch_assoc($query1))
							{


						?>
						<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 productdiv" style="height:335px;">
							<div class="product-box">
								<img src="images/<?php echo $row['main_image'];?>" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="product_details.php?id=<?php echo $row['id'];?>&header=<?php echo $row['header'];?>"><span style="cursor: pointer;"><?php echo $row['header']?> </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<?php }}?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html><br><br><br><br><br><br><br><br>

<?php
myFooter();
submitfeedback();
?>
