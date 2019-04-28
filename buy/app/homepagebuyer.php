<?php
session_start();
include 'common.php';
include '../service/user_service.php';
include '../data/products_data_access.php';
$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];
// get_users($email);
// echo "<script>alert('$email')</script>";
$cart_rows=mysqli_num_rows(get_cart($id));
$bookmark_rows=mysqli_num_rows(get_bookmark($id));
echo "<title>Buy & Get</title>";
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
mySearch();

if($_GET['error']=="cart_bookmark_error")
{
	echo "<script>alert('Already Added')</script>";
	echo "<script>document.location='homepagebuyer.php';</script>";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="buyercss.css">
	</head>
	<body>
		<div class="slider">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 slider-index">
						<div class="slideshow-container">
							<div class="myslides fade">
								<div class="numbertext">1/3</div>
								<img src="images/1.png" style="width: 100%">
								<div class="text">Caption One</div>
							</div>
							<div class="myslides fade">
								<div class="numbertext">2/3</div>
								<img src="images/2.png" style="width: 100%">
								<div class="text">Caption two</div>
							</div>
							<div class="myslides fade">
								<div class="numbertext">3/3</div>
								<img src="images/3.png" style="width: 100%">
								<div class="text">Caption three</div>
							</div>
						</div><br>
						<div style="text-align: center">
							<span class="dot" onclick="currenslide(1)"></span>
							<span class="dot" onclick="currenslide(2)"></span>
							<span class="dot" onclick="currenslide(3)"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="demo"></div>
		<div class="products">
			<div class="laptop-products">
				<div class="container">
					<br>
					<span class="laptop-products-text">Laptop</span>
					<br><br>
					<div class="row text-center">	
						<?php 
						
						$query1=laptops_index_query();
						$rows1=mysqli_num_rows($query1);
						if($rows1>0)
						{
							while($row=mysqli_fetch_assoc($query1))  
							{
								
						
						?>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv" style="height:335px;">
							<div class="product-box">
								<img src="images/<?php echo $row['main_image'];?>" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="product_details.php?id=<?php echo $row['id'];?>&header=<?php echo $row['header'];?>"><span style="cursor: pointer;"><?php echo $row['header']?> </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
								<!-- <span class="pull-left text-style" onclick="cartadd()"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span> -->
								<form method="POST" action="carthandler.php?id=<?=$id?>&p_id=<?=$row['id']?>">		
									<br><br>
									<button type="submit" class="btn btn-default pull-left fa fa-cart-plus btn-sm pull-left" name="add_to_cart_index"></button>
									<button type="submit" class="btn btn-default pull-left fa fa-bookmark-o btn-sm" name="bookmark_index"></button>
								</form>
							</div>
						</div>
						<?php }}?>
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="width:91px;">
							<a href="laptop.php"><span>See all</span></a>
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
									<form method="POST" action="carthandler.php?c_id=<?php echo $row['c_id'];?>">
										<td><?php echo $slno +=1?></td>
										<td><img src="images/<?php echo $row['main_image']?>" width="70px;"></td>
										<td id="price<?php echo $row['c_id']?>"><?php echo $row['special_price']*$row["quantity"]?></td>
										<td><input id="quantity<?php echo $row['c_id']?>" type="number" class="input-sm" value="<?php echo $row["quantity"]?>" onchange="quantityupdate(<?= $row['c_id']?>, <?= $row['special_price']?>)" min="1" name="quantity"></td>
										<td><button type="submit" name="save" class="btn btn-success fa fa-check"></button></td>
										<td><button type="submit" name="delete" class="btn btn-danger fa fa-trash"></button></td>
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
							<button type="submit" class="btn btn-danger pull-left fa fa-trash" name="delete_all">&nbsp; Clear ALL</button>
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
										<td><button type="submit" name="delete_bookmark" class="btn btn-danger fa fa-trash"></button></td>
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
							<button type="submit" class="btn btn-danger pull-left fa fa-trash" name="delete_bookmark_all">&nbsp; Clear ALL</button>
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

<script>
	function searchByAjax(str)
	{
		let divid=document.getElementById("demo");
		let xhttp=new XMLHttpRequest();
		if(str=="")
			{
				
				divid.style.display = "none";
			}
		else
		{
			xhttp.onreadystatechange=function()
			{
				
			if(this.readyState==4 && this.status==200)
				{
					// console.log("200: ",this.responseText);
					// alert(this.responseText);
					divid.style.display = "block";
					divid.innerHTML=this.responseText;
				}
			
			};
			xhttp.open("GET","search.php?str="+str,true);
			xhttp.send();
		}
	}
	function quantityupdate(id,price)
	{
		let tdiv=document.getElementById("price"+id).innerText;
		let quantity=document.getElementById("quantity"+id).value;
		console.log(id,tdiv,quantity);
		let xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange=function()
		{
			
		if(this.readyState==4 && this.status==200)
			{
				// alert("hello");
				tdiv.innerHTML =tdiv*quantity;
			}
		
		};
		xhttp.open("GET","homepagebuyer.php?c_id="+id+"?price="+price,true);
		xhttp.send();
	}

	var slideIndex=0;
		showSlides();
		function currenslide(n)
		{
			showSlides(slideIndex=n);
		}
		
		function showSlides()
		{
			var i;
			var slides=document.getElementsByClassName("myslides");
			var dots=document.getElementsByClassName("dot");
			for(i=0;i<slides.length;i++)
			{
				slides[i].style.display="none";
			}
			slideIndex++;
			if(slideIndex>slides.length)
			{
				slideIndex=1;
			}
			for(i=0;i<dots.length;i++)
			{
				dots[i].className=dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display="block";
			dots[slideIndex-1].className +=" active";
			setTimeout(showSlides,2000);
			// setInterval(showSlides,2000);
		}
		function cartadd()
		{
			alert("hello");
		}

</script>

