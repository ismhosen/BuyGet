<?php
echo "<title>Mobile</title>";
session_start();
$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];
include 'common.php';
// include '../data/products_data_access.php';
include '../service/product_services.php';
// include '../data/cart_data_access.php';
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
		<link rel="stylesheet" type="text/css" href="commoncss.css">
	</head>
	<body>
		<div class="products">
			<div class="mobile-products">
				<div class="container">
					<br>
					<span class="mobile-products-text">Mobile</span>
					<br><br>
					<div class="row text-center">	
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal" id="myModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">See Your Cart</h4>
					</div>
					<div class="modal-body">
						<table class="table">
						
							<thead>
								<th>SL no.</th>
								<th>Product Image</th>
								<th>Product Price</th>
								<th>Quantity</th>
								<th>Delete</th>
								<th>Save</th>
								
							</thead>
							<tbody>
							<?php 
							$slno=0;
							// echo "<script>alert($id)</script>";
							$query1=get_cart($id);
							$rows1=mysqli_num_rows($query1);
							if($rows1>0)
							{
								while($row=mysqli_fetch_assoc($query1))  
								{		
									$p_id=$row['c_id'];	
							?>
								<tr>
									<td><?php echo $slno +=1?></td>
									<td><img src="images/<?php echo $row['main_image']?>" width="70px;"></td>
									<td><?php echo $row['special_price']*$row['quantity']?></td>
									<td><input type="number" class="input-sm" value="<?php echo $row['quantity']?>"></td>

									<form method="POST" action="carthandler.php?c_id=<?php echo $p_id;?>">
										<td><button type="submit" name="delete" class="btn btn-danger fa fa-trash"></button></td>
										<td><button type="submit" name="save" class="btn btn-success fa fa-check"></button></td>
									</form>
								</tr>
								<?php }}?>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
