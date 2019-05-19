<?php
echo "<title>Buy & Get</title>";
session_start();
// session_destroy();
include 'common.php';
include '../data/products_data_access.php';
myLink();
myHeader();
mySearch();
?>
<!DOCTYPE html>
<html>
	<head>
		<style>
		
		</style>
		<link rel="stylesheet" type="text/css" href="commoncss.css">
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
								<?php
									if($_SESSION['signin']==true){
								?>
								<button type="submit" class="btn btn-default pull-left fa fa-cart-plus btn-sm pull-left" name="add_to_cart_index"></button>
								<button type="submit" class="btn btn-default pull-left fa fa-bookmark-o btn-sm" name="bookmark_index"></button>
								<button type="submit" class="btn btn-default pull-left fa fa-exchange btn-sm" name="compare_index" title="Add to Compare"></button>
								<?php }
								else {
								?>
								<form method="POST" action="carthandler.php?id=<?=$id?>&p_id=<?=$row['id']?>">		
									<br><br>
									<button type="button" class="btn btn-default pull-left fa fa-cart-plus btn-sm pull-left" name="add_to_cart_index" onclick="signin()"></button>
									<button type="button" class="btn btn-default pull-left fa fa-bookmark-o btn-sm" name="bookmark_index" onclick="signin()"></button>
									<button type="submit" class="btn btn-default pull-left fa fa-exchange btn-sm" name="compare_index" title="Add to Compare"></button>
								</form>
								<?php }?>
							</div>
						</div>
						<?php }}?>
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="width:91px;">
							<a href="laptop.php"><span>See all</span></a>
						</div>
					</div>
				</div>
			</div>
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
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="width:91px;">
							<a href="mobile.php"><span>See all</span></a>
						</div>
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

		function signin()
		{
			alert("Please sign in");
		}

</script>

