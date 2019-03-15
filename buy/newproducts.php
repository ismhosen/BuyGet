<?php
echo "<title>Home</title>";
include 'common.php';
myLink();
myHeader();
mySearch();
?>
<html>
	<head>
		<style>
			body{
				background: #e6f0ff;
			}
			.slider
			{
				position: absolute;
				top: 52px;
				
				
			}
			.slider-index
			{
				
			}
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
				padding: 10px 15px;
				-webkit-box-shadow: 0 0 10px rgba(32, 80, 223, .2);
    			box-shadow: 0 0 10px rgba(32, 80, 223, .2);
				
			}.productdiv:hover{
				transition: all .3s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(32, 80, 223, .4);
    			box-shadow: 0 0 10px rgba(32, 80, 223, .4);
				
			}
			.text-style{
				
				font-size: 15px;
			}
		</style>
	</head>
	<body>
		<div class="slider">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 slider-index">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							  <li data-target="#myCarousel" data-slide-to="1"></li>
							  <li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>

				<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="images/3.png" alt="New York">
									<div class="carousel-caption">
									  <h3>New York</h3>
									  <p>The atmosphere in New York is lorem ipsum.</p>
									</div>      
								 </div>

								 <div class="item">
									<img src="images/2.png" alt="Chicago">
									<div class="carousel-caption">
									  <h3>Chicago</h3>
									  <p>Thank you, Chicago - A night we won't forget.</p>
									</div>      
								 </div>

								 <div class="item">
									<img src="images/1.png" alt="Los Angeles">
									<div class="carousel-caption">
										<h3>LA</h3>
									  	<p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
									</div>      
								 </div>
							</div>

				<!-- Left and right controls -->
	<!--
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
	-->
						</div>
					</div>
				</div>
			</div>
		
		<div class="products">
			<div class="new-products">
				<div class="container">
					<br>
					<span class="new-products-text">New Products</span>
					<br><br>
					<div class="row text-center">	
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="background: none;valign:bottom;">
							<a href=""><span>See all</span></a>
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
								<span class="pull-left text-style"><i class="fa fa-money" style="color:#4d94ff;"></i>&nbsp;<span style="font-weight:bold;"> <del>100000</del> 100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><i class="fa fa-money" style="color:#4d94ff;"></i>&nbsp;<span style="font-weight:bold;"> <del>100000</del> 100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><i class="fa fa-money" style="color:#4d94ff;"></i>&nbsp;<span style="font-weight:bold;"> <del>100000</del> 100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><i class="fa fa-money" style="color:#4d94ff;"></i>&nbsp;<span style="font-weight:bold;"> <del>100000</del> 100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style"><i class="fa fa-money" style="color:#4d94ff;"></i>&nbsp;<span style="font-weight:bold;"> <del>100000</del> 100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="background: none;valign:bottom;">
							<a href=""><span>See all</span></a>
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
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="background: none;valign:bottom;">
							<a href=""><span>See all</span></a>
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
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv">
							<div class="product-box">
								<img src="images/laptop%203.png" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
								<a href="#"><span style="cursor: pointer;">ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U </span></a><br><br>
								<span class="pull-left text-style">Price: <span>100000</span>/-</span>
								<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
							</div>
						</div>
						<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 productdiv" style="background: none;valign:bottom;">
							<a href=""><span>See all</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
	</body>
</html><br><br><br><br><br><br><br><br>
	
<?php
myFooter();
?>
