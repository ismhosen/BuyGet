<?php
session_start();
include 'common.php';
include '../service/product_services.php';
// include '../data/cart_data_access.php';
// include '../service/user_service.php';

$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];

$cart_rows=mysqli_num_rows(get_cart($id));
$bookmark_rows=mysqli_num_rows(get_bookmark($id));
myLink();
myHeader();
//mySearch();
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
$p_id=$_GET['id'];
get_title($p_id);
// echo "<script>alert($id)</script>";

if($_GET['error']=="cart_bookmark_error")
{
	echo "<script>alert('Already Added')</script>";
	// echo "<script>document.location='homepagebuyer.php';</script>";
}
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="commoncss.css">
		
	</head>
	<body>
		<div class="container slide-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
							<div class="side-image">
								<?php
								// var_dump($id);
									$query1=products_id($p_id);
									$rows1=mysqli_num_rows($query1);
									if($rows1>0)
									{
										while($row=mysqli_fetch_assoc($query1))  
										{
								?>
								<img id='image1' src="images/laptop2.png" alt="" width=100px; onclick="imagechange(this.id);" style='opacity:.5;'><hr>
								<img src="images/laptop4.png" alt="" width=100px; id='image2' onclick="imagechange(this.id);"><hr>
								<img src="images/laptop 3.png" alt="" width=100px; id='image3' onclick="imagechange(this.id);"><hr>
								<img src="images/laptop4.png" alt="" width=100px; id='image4' onclick="imagechange(this.id);"><hr>
							</div>
						</div>
						<div class="col-lg-7 col-md-4 col-sm-3 col-xs-2">
							<div class="main-images">
								<img src="images/laptop2.png" alt="" id="mainimage" width=600px>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="product-short-des">
						<span style='font-size:15'><strong><?php echo $row['header'];?></strong></span><hr>
						<span>product owner: &nbsp;<a href="sellerpublicprofile.php"><?php owner_name($row['owner_id']);?></a></span><hr>
						<span style='opacity:.8;'>Avaibility: &nbsp;Yes</span><hr>
						<span style='opacity:.8;'>Regular Price: &nbsp;<span style="font-weight:bold;">৳</span>&nbsp;<span><?php echo $row['regular_price'];?></span>/-</span><br>
						<span style="font-weight:bold;">Special Price: &nbsp;<span >৳</span>&nbsp;<span><?php echo $row['special_price'];?></span>/-</span><hr>
						<span style="font-weight:bold;">Quick Review</span><br>
						<span style='opacity:.8;'>Processor: &nbsp;<?php echo $row['processor'];?></span><br>
						<span style='opacity:.8;'>Generation: &nbsp;<?php echo $row['generation'];?></span><br>
						<span style='opacity:.8;'>Processor clock speed: &nbsp;<?php echo $row['clock_speed'];?></span><br>
						<span style='opacity:.8;'>Display size: &nbsp;<?php echo $row['display_size'];?></span><br>
						<span style='opacity:.8;'>Ram: &nbsp; <?php echo $row['ram'];?></span><br>
						<span style='opacity:.8;'>Ram type: &nbsp;<?php echo $row['display_type'];?></span><hr>
						
						<?php
						if($email==""){
						?>
						<br><br>
						<!-- <button type="submit" class="btn btn-default pull-left fa fa-cart-plus btn-sm pull-left" name="add_to_cart_index" ></button>
						<button type="submit" class="btn btn-default pull-left fa fa-bookmark-o btn-sm" name="bookmark_index" onclick="signin()"></button> -->
						<button type='Submit' name='add_to_cart_details' onclick="signin()">Add to cart</button>&nbsp;
						<button type='Submit' style='' name='bookmark_details' onclick="signin()"><i class='fa fa-bookmark-o'></i></button>&nbsp;
						<button type='Submit'>Add to compare</button>&nbsp;
						
						<?php }
						else {
						?>
						<form action="carthandler.php?id=<?=$id?>&p_id=<?=$row['id']?>" method="POST">
							<button type='Submit' name='add_to_cart_details'>Add to cart</button>&nbsp;
							<button type='Submit' style='' name='bookmark_details'><i class='fa fa-bookmark-o'></i></button>&nbsp;
							<!-- <button type='Submit'>Add to compare</button>&nbsp; -->
							<button type='Submit'> <a href="chat.php?r_id=<?php echo $row['owner_id'] ?>">Contact Seller</a> </button>&nbsp;
							<?php   $_SESSION['reciever'] = $row['owner_id']; ?>
						</form>
						<?php }?>
					</div>
				</div>
			</div><hr>
			<div class="product-table">
				<div class="row">
						<button id='details-btn'>Product-Details</button>
						<button id='review-btn'>Product-Review</button>
					<div id="details">
						<table>
						<h4>Product Details</h4><hr style='width:100%; border:1px solid rgba(77,148,255,.2);margin-top:5px;margin-bottom:15px;'>
							<tbody>
								
								<tr>
									<td width=300px>Brand</td>
									<td width=900px><?php echo $row['brand'];?></td>
								</tr>
								<tr>
									<td width=300px>Model</td>
									<td width=900px><?php echo $row['model'];?></td>
								</tr>
								<tr>
									<td width=300px>Processor</td>
									<td width=900px><?php echo $row['processor'];?></td>
								</tr>
								<tr>
									<td width=300px>Generation</td>
									<td width=900px><?php echo $row['generation'];?></td>
								</tr>
								<tr>
									<td width=300px>Clock speed</td>
									<td width=900px><?php echo $row['clock_speed'];?></td>
								</tr>
								<tr>
									<td width=300px>Cache</td>
									<td width=900px><?php echo $row['cache'];?></td>
								</tr>
								<tr>
									<td width=300px>Dispaly type</td>
									<td width=900px><?php echo $row['display_type'];?></td>
								</tr>
								<tr>
									<td width=300px>Display size</td>
									<td width=900px><?php echo $row['display_size'];?></td>
								</tr>
								<tr>
									<td width=300px>Display Resolution</td>
									<td width=900px><?php echo $row['display_resolution'];?></td>
								</tr>
								<tr>
									<td width=300px>Touch</td>
									<td width=900px><?php echo $row['touch'];?></td>
								</tr>
								<tr>
									<td width=300px>RAM type</td>
									<td width=900px><?php echo $row['ram_type'];?></td>
								</tr>
								<tr>
									<td width=300px>RAM</td>
									<td width=900px><?php echo $row['ram'];?></td>
								</tr>
								<tr>
									<td width=300px>Storage</td>
									<td width=900px><?php echo $row['storage'];?></td>
								</tr>
								<tr>
									<td width=300px>Graphics chipset</td>
									<td width=900px><?php echo $row['graphics_chipset'];?></td>
								</tr>
								<tr>
									<td width=300px>Graphics memory</td>
									<td width=900px><?php echo $row['graphics_memory'];?></td>
								</tr>
								<tr>
									<td width=300px>Networking</td>
									<td width=900px><?php echo $row['networking'];?></td>
								</tr>
								<tr>
									<td width=300px>Display port</td>
									<td width=900px><?php echo $row['display_port'];?></td>
								</tr>
								<tr>
									<td width=300px>Audio port</td>
									<td width=900px><?php echo $row['audio_port'];?></td>
								</tr>
								<tr>
									<td width=300px>USB Port</td>
									<td width=900px><?php echo $row['usb_port'];?></td>
								</tr>
								<tr>
									<td width=300px>Battery</td>
									<td width=900px><?php echo $row['battery'];?></td>
								</tr>
								<tr>
									<td width=300px>Weight</td>
									<td width=900px><?php echo $row['weight'];?></td>
								</tr>
								<tr>
									<td width=300px>Color</td>
									<td width=900px><?php echo $row['color'];?></td>
								</tr>
								<tr>
									<td width=300px>Operating System</td>
									<td width=900px><?php echo $row['operating_system'];?></td>
								</tr>
								<tr>
									<td width=300px>Others</td>
									<td width=900px><?php echo $row['others'];?></td>
								</tr>
								<tr>
									<td width=300px>Part No</td>
									<td width=900px><?php echo $row['part_no'];?></td>
								</tr>
								<tr>
									<td width=300px>Country of Origin</td>
									<td width=900px><?php echo $row['origin'];?></td>
								</tr>
								<tr>
									<td width=300px>Made in Assemble</td>
									<td width=900px><?php echo $row['assemble'];?></td>
								</tr>
								<tr>
									<td width=300px>Warranty</td>
									<td width=900px><?php echo $row['warranty'];?></td>
								</tr>
								<!-- <tr>
									<td width=300px>RAM type</td>
									<td width=900px>DDR4 2400MHz</td>
								</tr> -->
								<?php }}?>
							</tbody>
						</table>
					</div>
					<div id="review">
						<h4>Review</h4><hr style='width:100%; border:1px solid rgba(77,148,255,.2);margin-top:5px;margin-bottom:15px;'>
						
						<form action="">
						<span>Please give Your rating here: </span><hr style='width:100%; border:1px solid rgba(77,148,255,.2);margin-top:5px;margin-bottom:15px;'>
							<i class='fa fa-star-o' title='Bad'></i>&nbsp;&nbsp;
							<i class='fa fa-star-half-o' title='Good'></i>&nbsp;&nbsp;
							<i class='fa fa-star' title='Best'></i>&nbsp;&nbsp;
						</form>
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
								<th>Save</th>
								<th>Delete</th>
								<th>Details</th>
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
										<td><button type="submit" name="save_details" class="btn btn-success fa fa-check"></button></td>
										<td><button type="submit" name="delete_details" class="btn btn-danger fa fa-trash"></button></td>
										<td><a href="product_details.php?id=<?php echo $row['product_id'];?>&header=<?php echo $row['header'];?>"><button type="button" name="details" class="btn btn-default fa fa-info-circle"></button></a></td>
										<!-- <td><button type="submit" name="save" class="btn btn-success fa fa-check"></button></td> -->
									</form>
								</tr>
								<?php }}?>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<form method="POST" action="carthandler.php?id=<?=$id?>&p_id=<?php echo $p_id;?>" style="margin:0px; padding:0px; display:inline;">		
							<button type="submit" class="btn btn-danger pull-left fa fa-trash" name="delete_all_details">&nbsp; Clear ALL</button>
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
							<tr>
							<!-- <td>Hello</td>
							<td>Hello</td>
							<td>Hello</td>
							<td>Hello</td>
							<td>Hello</td> -->
							</tr>
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
									<form method="POST" action="carthandler.php?b_id=<?php echo $row['b_id'];?>&p_id=<?php echo $p_id;?>">
										<td><?php echo $slno +=1?></td>
										<td><img src="images/<?php echo $row['main_image']?>" width="70px;"></td>
										<td id="price<?php echo $row['b_id']?>"><?php echo $row['special_price']?></td>
										<td><button type="submit" name="delete_bookmark_details" class="btn btn-danger fa fa-trash"></button></td>
										<td><a href="product_details.php?id=<?php echo $row['product_id'];?>&header=<?php echo $row['header'];?>"><button type="button" name="details" class="btn btn-default fa fa-info-circle"></button></a></td>
										<!-- <td><button type="submit" name="save" class="btn btn-success fa fa-check"></button></td> -->
									</form>
								</tr>
								<?php }}?>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<form method="POST" action="carthandler.php?id=<?=$id?>&p_id=<?php echo $p_id;?>" style="margin:0px; padding:0px; display:inline;">		
							<button type="submit" class="btn btn-danger pull-left fa fa-trash" name="delete_bookmark_all_details">&nbsp; Clear ALL</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</body><hr>
	<script>
		
		let details=document.getElementById("details");
		let detailsbtn=document.getElementById("details-btn");
		let reviewbtn=document.getElementById("review-btn");
		let review=document.getElementById("review");
		let xhttp=new XMLHttpRequest();
		
		xhttp.onreadystatechange=function()
		{
			
		if(this.readyState==4 && this.status==200)
			{
				// console.log("200: ",this.responseText);
				// alert(this.responseText);
				reviewbtn.onclick=function()
				{
					review.style.display = "block";
					details.style.display = "none";
				};
				detailsbtn.onclick=function()
				{
					details.style.display = "block";
					review.style.display = "none";
				};
				// divid.innerHTML=this.responseText;
			}
		
		};
		xhttp.open("GET","product_details.php",true);
		xhttp.send();
			
			
	function imagechange(id)
	{
		var x=document.getElementById(id).src;
		// document.getElementById("demo").innerHTML = x;
		document.getElementById("mainimage").src = x;
		document.getElementById(id).style.opacity=.5;

		// if(document.getElementById(id).src==document.getElementById("mainimage").src)
		// {
		// 	document.getElementById(id).style.opacity=.5;
		// }

		// console.log(id);
	}
	// function detailsBtn()
	// {
	// 	var x = document.getElementById("table");
	// 	var y = document.getElementById("review");
	// 	if (x.style.display === "none") {
	// 		x.style.display = "block";
	// 		y.style.display = "none";
	// 	} else {
	// 		x.style.display = "none";
	// 		y.style.display = "none";
	// 	}
	// }
	// function reviewBtn()
	// {
	// 	var x = document.getElementById("review");
	// 	var y = document.getElementById("table");
	// 	if (x.style.display === "none") {
	// 		x.style.display = "block";
	// 		y.style.display = "none";
	// 	} else {
	// 		x.style.display = "none";
	// 		y.style.display = "none";
	// 	}
	// }
	function signin()
		{
			alert("Please sign in");
		}

	</script>
</html>
<?php
myFooter();
submitfeedback();
?>