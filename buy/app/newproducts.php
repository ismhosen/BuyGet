<?php
echo "<title>New Products</title>";
include 'common.php';
include_once '../data/products_data_access.php';
include_once '../service/product_services.php';
// include_once '../data/cart_data_access.php';
session_start();
$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];
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
	echo "<script>document.location='newproducts.php';</script>";
}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="commoncss.css">
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
								<?php
									if($_SESSION['signin']==true){
								?>
								<form method="POST" action="carthandler.php?id=<?=$id?>&p_id=<?=$row['id']?>">
									<button type="submit" class="btn btn-default pull-left fa fa-cart-plus btn-sm pull-left" name="add_to_cart_new"></button>
									<button type="submit" class="btn btn-default pull-left fa fa-bookmark-o btn-sm" name="bookmark_new"></button>
									<button type="submit" class="btn btn-default pull-left fa fa-exchange btn-sm" name="compare_index_new" title="Add to Compare"></button>
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
		<div class="modal" id="myModal" role="dialog">
			<div class="modal-dialog" style="width:900px;">
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
								<th>Save</th>
								<th>Delete</th>
								<th>Details</th>
								<th>Order</th>
							</thead>
							<tbody>
							<?php 
							$slno=0;
							
							// echo "<script>alert($id)</script>";
							$query1=get_cart($id);
							$rows1=mysqli_num_rows($query1);
							// echo "<script>alert($rows1)</script>";
							if($rows1>0)
							{
								while($row=mysqli_fetch_assoc($query1))  
								{			
							?>
								<tr>
									<form method="POST" action="carthandler.php?c_id=<?php echo $row['c_id'];?>">
										<td><?php echo $slno +=1?></td>
										<td><img src="images/<?php echo $row['main_image']?>" width="70px;"></td>
										<td id="price<?php echo $row['c_id']?>"><?php echo $row['special_price']*$row["quantity"]?></td>
										<td><input id="quantity<?php echo $row['c_id']?>" type="number" class="input-sm" value="<?php echo $row["quantity"]?>" onchange="quantityupdate(<?= $row['c_id']?>, <?= $row['special_price']?>)" min="1" name="quantity"></td>
										<td><button type="submit" name="save_new" class="btn btn-success fa fa-check"></button></td>
										<td><button type="submit" name="delete_new" class="btn btn-danger fa fa-trash"></button></td>
										<td><a href="product_details.php?id=<?php echo $row['product_id'];?>&header=<?php echo $row['header'];?>"><button type="button" name="details" class="btn btn-default fa fa-info-circle"></button></a></td>
										<td><a href="order.php?id=<?php echo $row['product_id'];?>&header=<?php echo $row['header'];?>"><button type="button" name="order" class="btn btn-default fa fa-arrow-right"></button></a></td>
										<!-- <td><button type="submit" name="save" class="btn btn-success fa fa-check"></button></td> -->
									</form>
								</tr>
								<?php }}?>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<form method="POST" action="carthandler.php?id=<?=$id?>" style="margin:0px; padding:0px; display:inline;">		
							<button type="submit" class="btn btn-danger pull-left fa fa-trash" name="delete_all_new">&nbsp; Clear ALL</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal" id="bookmarkModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">See Your Bookmark Products</h4>
					</div>
					<div class="modal-body">
						<table class="table">
						
							<thead>
								<th>SL no.</th>
								<th>Product Image</th>
								<th>Product Price</th>
								<th>Delete</th>
								<th>Details</th>
							</thead>
							<tbody>
							<?php 
							$slno=0;
							// echo "<script>alert($id)</script>";
							$query1=get_bookmark($id);
							$rows1=mysqli_num_rows($query1);
							// echo "<script>alert($rows1)</script>";
							if($rows1>0)
							{
								while($row=mysqli_fetch_assoc($query1))  
								{			
							?>
								<tr>
									<form method="POST" action="carthandler.php?b_id=<?php echo $row['b_id'];?>">
										<td><?php echo $slno +=1?></td>
										<td><img src="images/<?php echo $row['main_image']?>" width="70px;"></td>
										<td id="price<?php echo $row['b_id']?>"><?php echo $row['special_price']?></td>
										<td><button type="submit" name="delete_bookmark_new" class="btn btn-danger fa fa-trash"></button></td>
										<td><a href="product_details.php?id=<?php echo $row['product_id'];?>&header=<?php echo $row['header'];?>"><button type="button" name="delete" class="btn btn-default fa fa-info-circle"></button></a></td>
										<!-- <td><button type="submit" name="save" class="btn btn-success fa fa-check"></button></td> -->
									</form>
								</tr>
								<?php }}?>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<form method="POST" action="carthandler.php?id=<?=$id?>" style="margin:0px; padding:0px; display:inline;">		
							<button type="submit" class="btn btn-danger pull-left fa fa-trash" name="delete_bookmark_all_new">&nbsp; Clear ALL</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script>
		function signin()
		{
			alert("Please sign in");
		}
	</script>
</html><br><br><br>
	
<?php
myFooter();
submitfeedback();
?>
