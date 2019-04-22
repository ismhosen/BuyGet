<?php
session_start();
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];
include 'common.php';
include '../service/product_services.php';
// include '../data/cart_data_access.php';
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
$id=$_GET['id'];
get_title($id);
?>
<html>
	<head>
		<style>
			.slide-container
			{	
				margin-top:70px;
			}
			.side-image hr
			{
				margin-top:5px;				
				margin-bottom:5px;
				border:0px solid #4d94ff;				
			}
			.side-image img
			{
				border:.5px solid #4d94ff;				
			}
			.side-image img:hover
			{
				transition: all .3s ease-in-out; 
				-ms-transform: scale(1.1); /* IE 9 */
				-webkit-transform: scale(.1); /* Safari 3-8 */
  				transform: scale(1.1); 		
			}
			
			.main-images
			{
				margin-left:60px;
				
			}
			.product-short-des hr
			{
				margin-top:5px;				
				margin-bottom:5px;
			}
			.product-short-des button
			{
				border:.1px solid rgba(77,148,255,.7);
				background:#fff;
				padding:10px;
				height:40px;
				border-radius:3px;
			}
			.product-short-des button:hover
			{
				transition: all .2s ease-in-out;
				background:#4d94ff;
				border:none;
				color:#fff;
			}
			table
			{
				
			}
			table tbody tr td
			{
				padding: 10px;
				border:.1px solid rgba(77,148,255,.3);
			}
			table tbody tr:hover
			{
				transition: all .3s ease-in-out;
				background:#fff;
			}
			.product-table button
			{
				border:.1px solid rgba(77,148,255,.7);
				background:#fff;
				padding:10px;
				height:40px;
				border-radius:3px;
			}
			.product-table button:hover
			{
				transition: all .2s ease-in-out;
				background:#4d94ff;
				border:none;
				color:#fff;
			}
			#review i
			{
				color:rgba(77,148,255);
				font-size:21px;
			}
			#review i
			{
				color:rgba(77,148,255);
				font-size:21px;
			}
			#review
			{
				display:none;
			}
			#review i:hover
			{
				transition: all .3s ease-in-out;
				color:rgba(77,148,255);
				font-size:29px;
			}
			
		</style>
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
									$query1=products_id($id);
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
						<span>product owner: &nbsp;<a href="sellerpublicprofile.php"><?php owner_name($row['owner_email']);?></a></span><hr>
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
						<form action="">
							<button type='Submit'>Add to cart</button>&nbsp;
							<button type='Submit' style=''><i class='fa fa-bookmark-o'></i></button>&nbsp;
							<button type='Submit'>Add to compare</button>&nbsp;
						</form>
					</div>
				</div>
			</div><hr>
			<div class="product-table">
				<div class="row">
						<button id='details-btn' onclick='selectbutton();'>Product-Details</button>
						<button id='review-btn' onclick='selectbutton();'>Product-Review</button>
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
	</body><hr>
	<script>
		function selectbutton()
			{
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
			
			}
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
		

	</script>
</html>
<?php
myFooter();
?>