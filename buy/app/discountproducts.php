<?php
echo "<title>Discount Products</title>";
session_start();
$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];
include 'common.php';
include '../data/products_data_access.php';
include '../data/cart_data_access.php';
$cart_rows=mysqli_num_rows(get_cart($id));
$bookmark_rows=mysqli_num_rows(get_bookmark($id));
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
	buyerheader($name,$imgname,$cart_rows,$bookmark_rows);
}
mySearch();

if($_GET['error']=="cart_bookmark_error")
{
	echo "<script>alert('Already Added')</script>";
	echo "<script>document.location='discountproducts.php';</script>";
}
?>
<html>
	<head>
		<style>
			.products
			{
				margin-top: 120px;
				background: #e6f0ff;
			}
			.discount-products-text
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
		<div class="discount-products">
				<div class="container">
					<br>
					<span class="discount-products-text">Discount Products</span>
					<br><br>
					<div class="row text-center">
						<?php 
						
						$query1=order_By_Discount();
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
								<?php
									if($_SESSION['signin']==true){
								?>
								<form method="POST" action="carthandler.php?id=<?=$id?>&p_id=<?=$row['id']?>">
									<button type="submit" class="btn btn-default pull-left fa fa-cart-plus btn-sm pull-left" name="add_to_cart_discount"></button>
									<button type="submit" class="btn btn-default pull-left fa fa-bookmark-o btn-sm" name="bookmark_index_discount"></button>
									<!-- <button type="submit" class="btn btn-default pull-left fa fa-exchange btn-sm" name="compare_index_new" title="Add to Compare"></button> -->
								</form>
								<?php }
								else {
								?>
									<br><br>
									<button type="button" class="btn btn-default pull-left fa fa-cart-plus btn-sm pull-left" name="add_to_cart_index" onclick="signin()"></button>
									<button type="button" class="btn btn-default pull-left fa fa-bookmark-o btn-sm" name="bookmark_index" onclick="signin()"></button>
									<button type="submit" class="btn btn-default pull-left fa fa-exchange btn-sm" name="compare_index" title="Add to Compare"></button>
								<?php }?>
							</div>
						</div>
						<?php }}?>
					</div>
				</div>
			</div>	
		</div>
	</body>
</html><br><br><br><br><br><br><br><br>
	<script>
	function signin()
		{
			alert("Please sign in");
		}
	</script>
<?php
myFooter();
submitfeedback();
?>
