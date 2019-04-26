<?php
session_start();
include 'common.php';
include '../service/user_service.php';
include '../data/products_data_access.php';
$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];
$address=$_SESSION['user']['address'];
$phone=$_SESSION['user']['phone'];
// get_users($email);

$cart_rows=mysqli_num_rows(get_cart($id));
$bookmark_rows=mysqli_num_rows(get_bookmark($id));
echo "<title>Buy & Get</title>";
$p_id=$_GET['id'];
//echo "<script>alert($id +' '+ $p_id)</script>";
myLink();
if($email=="")
{
	myHeader();
	echo "<script>document.location='index.php';</script>";
}
else if($_SESSION['type']=="seller")
{
	sellerheader($name,$imgname);
}
else if($_SESSION['type']=="buyer")
{
	buyerheader($name,$imgname,$cart_rows,$bookmark_rows);
}
// mySearch();
if($_GET['error']=="cart_bookmark_error")
{
	echo "<script>alert('Already Added')</script>";
	echo "<script>document.location='homepagebuyer.php';</script>";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<style>
            .order
            {
                margin-top:100px;
                margin-bottom:100px;
            }
            .information
            {
                border:1px solid black;
                padding: 20px 20px;
            }
            .order-details
            {
                border:1px solid black;
                padding: 10px 20px;
                margin-bottom: 20px;
            }
            .voucher
            {
                border:1px solid black;
                padding: 15px 20px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container order">
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                    <div class="information">
                        <form class="" style="margin:0;">
                            <table class="">
                                <tbody>
                                    <tr><strong>Your information</strong></tr><hr style="margin:5px 0px 10px 0px;">
                                    <tr>
                                        <td width=200px><label>Name:</label></td>
                                        <td width="500px">
                                            <input type="text" class="input-sm"  placeholder="&nbsp;Enter your Full Name..." size="30" name="fullname" value="<?= $name ?>"><br><br>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td width=200px><label>Email:</label></td>
                                        <td width="500px">
                                            <input type="text" class="input-sm" readonly  placeholder="&nbsp;Enter your Full Name..." size="30" name="fullname" value="<?= $email ?>"><br><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=200px><label>Address:</label></td>
                                        <td width="500px">
                                            <input type="text" class="input-sm"  placeholder="&nbsp;Enter your Full Name..." size="30" name="fullname" value="<?= $address ?>"><br><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=200px><label>Phone:</label></td>
                                        <td width="500px">
                                            <input type="text" class="input-sm"  placeholder="&nbsp;Enter your Full Name..." size="30" name="fullname" value="<?= $phone ?>"><br><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=200px><label>Comments:</label></td>
                                        <td width="500px">
                                            <textarea class="input-sm" cols="27" style="resize:none; overflow-y:scroll;"></textarea>
                                            <br><br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="order-row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="order-details">
                                <h4>Cart Details</h4>
                                <table class="table">
						
                                    <thead>
                                        <th>SL no.</th>
                                        <th>Product Image</th>
                                        <th>Product Price</th>
                                        <th>Quantity</th>
                                        <th>Save</th>
                                        <th>Delete</th>
                                        <th>Details</th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $slno=0;
                                    // echo "<script>alert($id,)</script>";
                                    $query1=get_order_cart($id,$p_id);;
                                    $rows1=mysqli_num_rows($query1);
                                   // echo "<script>alert($p_id)</script>";
                                    if($rows1>0)
                                    {
                                        while($row=mysqli_fetch_assoc($query1))  
                                        {			
                                    ?>
                                        <tr>
                                            <form method="POST" action="carthandler.php?c_id=<?php echo $row['c_id'];?>&p_id=<?php echo $p_id;?>">
                                                <td><?php echo $slno +=1?></td>
                                                <td><img src="images/<?php echo $row['main_image']?>" width="70px;"></td>
                                                <td id="price<?php echo $row['c_id']?>"><?php echo $row['special_price']*$row["quantity"]?></td>
                                                <td><input id="quantity<?php echo $row['c_id']?>" type="number" class="input-sm" value="<?php echo $row["quantity"]?>" onchange="quantityupdate(<?= $row['c_id']?>, <?= $row['special_price']?>)" min="1" name="quantity"></td>
                                                <td><button type="submit" name="save_order" class="btn btn-success fa fa-check"></button></td>
                                                <td><button type="submit" name="delete_order" class="btn btn-danger fa fa-trash"></button></td>
                                                <td><a href="product_details.php?id=<?php echo $row['product_id'];?>&header=<?php echo $row['header'];?>"><button type="button" name="details" class="btn btn-default fa fa-info-circle"></button></a></td>
                                                <!-- <td><button type="submit" name="save" class="btn btn-success fa fa-check"></button></td> -->
                                            </form>
                                        </tr>
                                        <?php }}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="voucher">
                            <form style="margin:0;display: inline;">
                                <input type="text" class="input-lg" placeholder="Enter Your Voucher(If any)" size="30"> <br><br>
                                <button class="btn btn-default">Apply Voucher</button>
                            </form>
                        </div>
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
									<form method="POST" action="carthandler.php?c_id=<?php echo $row['c_id'];?>&p_id=<?php echo $p_id;?>">
										<td><?php echo $slno +=1?></td>
										<td><img src="images/<?php echo $row['main_image']?>" width="70px;"></td>
										<td id="price<?php echo $row['c_id']?>"><?php echo $row['special_price']*$row["quantity"]?></td>
										<td><input id="quantity<?php echo $row['c_id']?>" type="number" class="input-sm" value="<?php echo $row["quantity"]?>" onchange="quantityupdate(<?= $row['c_id']?>, <?= $row['special_price']?>)" min="1" name="quantity"></td>
										<td><button type="submit" name="save_order" class="btn btn-success fa fa-check"></button></td>
										<td><button type="submit" name="delete_order" class="btn btn-danger fa fa-trash"></button></td>
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
							<button type="submit" class="btn btn-danger pull-left fa fa-trash" name="delete_all_order">&nbsp; Clear ALL</button>
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
									<form method="POST" action="carthandler.php?b_id=<?php echo $row['b_id'];?>&c_id=<?php echo $id;?>&p_id=<?php echo $p_id;?>">
										<td><?php echo $slno +=1?></td>
										<td><img src="images/<?php echo $row['main_image']?>" width="70px;"></td>
										<td id="price<?php echo $row['b_id']?>"><?php echo $row['special_price']?></td>
										<td><button type="submit" name="delete_bookmark_order" class="btn btn-danger fa fa-trash"></button></td>
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
							<button type="submit" class="btn btn-danger pull-left fa fa-trash" name="delete_bookmark_all_order">&nbsp; Clear ALL</button>
						</form>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>

<?php
myFooter();
submitfeedback();
?>