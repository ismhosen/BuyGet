<?php
echo "<title>Home</title>";
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
			.myslides
		{
			margin-top: 53px;
			display:none;
		}
		.slideshow-container
		{
			max-width:2000px;
			position: relative;
			margin:auto;
		}
		
		.text
		{
			color:#f2f2f2;
			font-size:15px;
			padding:8px 12px;
			position:absolute;
			bottom: 8px;
			width:100%;
			text-align:center;
		}
		.numbertext
		{
			color: #f2f2f2;
			font-size:12px;
			padding:8px 12px;
			position:absolute;
			top:0;
		}
		
		.fade
		{
			-webkit-animation-name:fade;
			-webkit-animation-duration:1.5s;
			animation-name: fade;
			animation-duration: 2s;
		}
		@-webkit-keyframes fade
		{
			from{opacity: 1}
			to {opacity: 1}
		}
		@media only screen and (max-width:300px)
		{
			.prev, .next, .text{font-size: 11px}
		}
			/* .slider
			{
				position: absolute;
				top: 52px;
			}
			.slider-index
			{
				
			} */
			.products
			{
				margin-top: 10px;
				background: #e6f0ff;
				
			}
			.new-products-text
			{
				font-size: 17;			
				color: #4d94ff;
			}
			.discount-products-text
			{
				font-size: 17;			
				color: #4d94ff;
			}
			.laptop-products-text
			{
				font-size: 17;			
				color: #4d94ff;
			}.mobile-products-text
			{
				font-size: 17;			
				color: #4d94ff;
			}
			.productdiv{
				
				background: #fff;
				margin-right:13px;
				margin-bottom:10px;
				padding: 10px 15px;
				-webkit-box-shadow: 0 0 10px rgba(32, 80, 223, .2);
    			box-shadow: 0 0 10px rgba(32, 80, 223, .2);
				
			}.productdiv:hover{
				transition: all .3s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(32, 80, 223, .4);
    			box-shadow: 0 0 10px rgba(32, 80, 223, .4);
				
			}
			.productdiv img:hover
			{
				transition: all .3s ease-in-out; 
				-ms-transform: scale(1.5); /* IE 9 */
				-webkit-transform: scale(.5); /* Safari 3-8 */
  				transform: scale(1.1); 
			}
			.text-style{
				
				font-size: 15px;
			}
			@media screen and (max-width: 1200px) and (min-width: 639px) {
				
				.productdiv {
					width:200px;
				}
			  }
			  @media screen and (max-width: 639px){
				
				.productdiv {
					width:280px;
				}
			  }
		</style>
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
								<a href="product_details.php?id=<?php echo $row['id'];?>&brand=<?php echo $row['brand'];?>&model=<?php echo $row['model'];?>&processor=<?php echo $row['processor'];?>&gen=<?php echo $row['generation'];?>&clock_speed=<?php echo $row['clock_speed'];?>&cache=<?php echo $row['cache'];?>&d_type=<?php echo $row['display_type'];?>&d_resolution=<?php echo $row['display_resolution'];?>&touch=<?php echo $row['touch'];?>&r_type=<?php echo $row['ram_type'];?>&ram=<?php echo $row['ram'];?>&storage=<?php echo $row['storage'];?>&g_chipset=<?php echo $row['graphics_chipset'];?>&g_memory=<?php echo $row['graphics_memory'];?>&networking=<?php echo $row['networking'];?>&d_port=<?php echo $row['display_port'];?>&a_port=<?php echo $row['audio_port'];?>&u_port=<?php echo $row['usb_port'];?>&battery=<?php echo $row['battery'];?>&weight=<?php echo $row['weight'];?>&color=<?php echo $row['color'];?>&os=<?php echo $row['operating_system'];?>&others=<?php echo $row['networking'];?>&part=<?php echo $row['part_no'];?>&origin=<?php echo $row['origin'];?>&assemble=<?php echo $row['assemble'];?>&warranty=<?php echo $row['warranty'];?>&r_price=<?php echo $row['regular_price'];?>&s_price=<?php echo $row['special_price'];?>&header=<?php echo $row['header'];?>&d_size=<?php echo $row['display_size'];?>"><span style="cursor: pointer;"><?php echo $row['header']?> </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<?php }}?>
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="width:91px;">
							<a href="laptop.php"><span>See all</span></a>
						</div>
					</div>

				</div>
			</div>
			<div class="discount-products">
				<div class="container">
					<br>
					<span class="discount-products-text">Discount Products</span>
					<br><br>
					<div class="row text-center">	
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;<span style="font-weight:bold;"> <del>100000</del></span> 100000 /-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;<span style="font-weight:bold;"> <del>100000</del></span> 100000 /-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;<span style="font-weight:bold;"> <del>100000</del></span> 100000 /-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;<span style="font-weight:bold;"> <del>100000</del></span> 100000 /-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;<span style="font-weight:bold;"> <del>100000</del></span> 100000 /-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="background: none;width:91px;">
							<a href="discountproducts.php"><span>See all</span></a>
						</div>
					</div>
				</div>
			</div>
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
								<a href="product_details.php?id=<?php echo $row['id'];?>&brand=<?php echo $row['brand'];?>&model=<?php echo $row['model'];?>&processor=<?php echo $row['processor'];?>&gen=<?php echo $row['generation'];?>&clock_speed=<?php echo $row['clock_speed'];?>&cache=<?php echo $row['cache'];?>&d_type=<?php echo $row['display_type'];?>&d_resolution=<?php echo $row['display_resolution'];?>&touch=<?php echo $row['touch'];?>&r_type=<?php echo $row['ram_type'];?>&ram=<?php echo $row['ram'];?>&storage=<?php echo $row['storage'];?>&g_chipset=<?php echo $row['graphics_chipset'];?>&g_memory=<?php echo $row['graphics_memory'];?>&networking=<?php echo $row['networking'];?>&d_port=<?php echo $row['display_port'];?>&a_port=<?php echo $row['audio_port'];?>&u_port=<?php echo $row['usb_port'];?>&battery=<?php echo $row['battery'];?>&weight=<?php echo $row['weight'];?>&color=<?php echo $row['color'];?>&os=<?php echo $row['operating_system'];?>&others=<?php echo $row['networking'];?>&part=<?php echo $row['part_no'];?>&origin=<?php echo $row['origin'];?>&assemble=<?php echo $row['assemble'];?>&warranty=<?php echo $row['warranty'];?>&r_price=<?php echo $row['regular_price'];?>&s_price=<?php echo $row['special_price'];?>&header=<?php echo $row['header'];?>&d_size=<?php echo $row['display_size'];?>"><span style="cursor: pointer;"><?php echo $row['header']?> </span></a><br><br>
								<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<?php }}?>
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="background: none;width:91px;">
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
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="background: none;width:91px;">
							<a href="mobile.php"><span>See all</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</body>
</html>
<p id="par"></p>
<?php
myFooter();
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

</script>

