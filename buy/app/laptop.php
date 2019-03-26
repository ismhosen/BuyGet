<?php
echo "<title>Laptop</title>";
include 'common.php';
include '../data/products_data_access.php';
myLink();
myHeader();
mySearch();
?>
<html>
	<head>
		<style>
			.products
			{
				margin-top: 120px;
				background: #e6f0ff;
			}
			.laptop-products-text
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
			.search
			{
				background: #fff;
				padding: 7px 15px;
			}
			.collapse-style
			{
				
			}
			.collapse-style span
			{
				font-size:15px;
				font-weight:300;
			}
			.collapse-style hr
			{
				height:2px;
				margin:7px;
			}
			.title-hr
			{
				background:#4d94ff;
				height:2px;
				margin-top:10;
			}
			
		</style>
	</head>
	<body>
		<div class="products">
			<div class="laptop-products">
				<div class="container">
					<br>
					
					<br><br>
					<div class="row">
						<div class="col-lg-3 col-md-2 col-sm-4 col-xs-12">
							
							<div class="search">
								<span class="laptop-products-text pull-left" style="font-weight:bold">Filter By</span><br><hr style="background:#4d94ff;height:2px;margin-top:13px">
								<div class="brand">
									<a href="#brand-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Brand</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="brand-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="radio" name="asus"><span>&nbsp;&nbsp;Asus</span><hr>
											<input type="radio" name="accer"><span>&nbsp;&nbsp;Accer</span><hr>
											<input type="radio" name="dell"><span>&nbsp;&nbsp;Dell</span><hr>
											<input type="radio" name="hp"><span>&nbsp;&nbsp;HP</span><hr>
											<input type="radio" name="lenevo"><span>&nbsp;&nbsp;Lenevo</span><hr>
											<input type="radio" name="microsoft"><span>&nbsp;&nbsp;Microsoft</span><hr>
											<input type="radio" name="macbook"><span>&nbsp;&nbsp;Macbook</span><hr>
											<input type="radio" name="razer"><span>&nbsp;&nbsp;Razer</span><hr>
											<input type="radio" name="ilife"><span>&nbsp;&nbsp;I-Life</span><hr>
										</form>
									</div>
								</div>
								<div class="processor">
									<a href="#processor-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Processor</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="processor-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="radio" name="i3"><span>&nbsp;&nbsp;Core i3</span><hr>
											<input type="radio" name="i5"><span>&nbsp;&nbsp;Core i5</span><hr>
											<input type="radio" name="i7"><span>&nbsp;&nbsp;Core i7</span><hr>
											<input type="radio" name="i9"><span>&nbsp;&nbsp;Core i9</span><hr>
											<input type="radio" name="ryzen3"><span>&nbsp;&nbsp;AMD Ryzen 3</span><hr>
											<input type="radio" name="ryzen5"><span>&nbsp;&nbsp;AMD Ryzen 5</span><hr>
											<input type="radio" name="ryzen7"><span>&nbsp;&nbsp;AMD Ryzen 7</span><hr>
											<input type="radio" name="pentium"><span>&nbsp;&nbsp;Intel Pentium</span><hr>
										</form>
									</div>
								</div>
								<div class="generation">
									<a href="#generation-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Generation</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="generation-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="radio" name="5th"><span>&nbsp;&nbsp;5th</span><hr>
											<input type="radio" name="6th"><span>&nbsp;&nbsp;6th</span><hr>
											<input type="radio" name="7th"><span>&nbsp;&nbsp;7th</span><hr>
											<input type="radio" name="8th"><span>&nbsp;&nbsp;8th</span><hr>
										</form>
									</div>
								</div>
								<div class="screen-size">
									<a href="#screen-size-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Screen-size</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="screen-size-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="radio" name="HD"><span>&nbsp;&nbsp;10 to 10.6 inch</span><hr>
											<input type="radio" name="FHD"><span>&nbsp;&nbsp;11 to 11.6 inch</span><hr>
											<input type="radio" name="2k"><span>&nbsp;&nbsp;12 to 12.6 inch</span><hr>
											<input type="radio" name="QHD"><span>&nbsp;&nbsp;13 inch</span><hr>
											<input type="radio" name="4k"><span>&nbsp;&nbsp;14 inch</span><hr>
											<input type="radio" name="4k"><span>&nbsp;&nbsp;15 to 15.6 inch</span><hr>
											<input type="radio" name="4k"><span>&nbsp;&nbsp;17 to 17.6 inch</span><hr>
											<input type="radio" name="4k"><span>&nbsp;&nbsp;13 to 14 inch</span><hr>
										</form>
									</div>
								</div>
								<div class="resolution">
									<a href="#resolution-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Resolution</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="resolution-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="radio" name="HD"><span>&nbsp;&nbsp;HD</span><hr>
											<input type="radio" name="FHD"><span>&nbsp;&nbsp;Full HD</span><hr>
											<input type="radio" name="2k"><span>&nbsp;&nbsp;2k</span><hr>
											<input type="radio" name="QHD"><span>&nbsp;&nbsp;QHD</span><hr>
											<input type="radio" name="4k"><span>&nbsp;&nbsp;4k</span><hr>
										</form>
									</div>
								</div>
								<div class="ram">
									<a href="#ram-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Ram</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="ram-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="radio" name="2GB"><span>&nbsp;&nbsp;2GB</span><hr>
											<input type="radio" name="4GB"><span>&nbsp;&nbsp;4GB</span><hr>
											<input type="radio" name="6GB"><span>&nbsp;&nbsp;6GB</span><hr>
											<input type="radio" name="8th"><span>&nbsp;&nbsp;8GB</span><hr>
											<input type="radio" name="16GB"><span>&nbsp;&nbsp;16GB</span><hr>
										</form>
									</div>
								</div>
								<div class="storage">
									<a href="#storage-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Storage</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="storage-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="radio" name="2GB"><span>&nbsp;&nbsp;64GB eMMC</span><hr>
											<input type="radio" name="4GB"><span>&nbsp;&nbsp;500GB HDD</span><hr>
											<input type="radio" name="6GB"><span>&nbsp;&nbsp;1TB HDD</span><hr>
											<input type="radio" name="8th"><span>&nbsp;&nbsp;2TB HDD</span><hr>
											<input type="radio" name="16GB"><span>&nbsp;&nbsp;128GB SSD</span><hr>
											<input type="radio" name="16GB"><span>&nbsp;&nbsp;128GB SATA SSD</span><hr>
											<input type="radio" name="16GB"><span>&nbsp;&nbsp;256GB SSD</span><hr>
											<input type="radio" name="16GB"><span>&nbsp;&nbsp;256GB SATA SSD</span><hr>
											<input type="radio" name="16GB"><span>&nbsp;&nbsp;512GB SSD</span><hr>
											<input type="radio" name="16GB"><span>&nbsp;&nbsp;512GB SATA SSD</span><hr>
										</form>
									</div>
								</div>
								<div class="graphics-memory">
									<a href="#graphics-memory-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Graphics Memory</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="graphics-memory-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="radio" name="2GB"><span>&nbsp;&nbsp;2GB</span><hr>
											<input type="radio" name="4GB"><span>&nbsp;&nbsp;4GB</span><hr>
											<input type="radio" name="6GB"><span>&nbsp;&nbsp;6GB</span><hr>
											<input type="radio" name="8th"><span>&nbsp;&nbsp;8GB</span><hr>
											<input type="radio" name="shared"><span>&nbsp;&nbsp;Shared</span><hr>
										</form>
									</div>
								</div>
								<div class="price">
									<a href="#price-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Price</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="price-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="text" name="min" size="6" placeholder="min"><span>&nbsp;&nbsp;-&nbsp;&nbsp;</span>
											<input type="text" name="min" size="6" placeholder="max">&nbsp;&nbsp;tk&nbsp;&nbsp;
											<input type="submit" class="btn btn-success" value="Go"><hr>
										</form>
									</div>
								</div>
							</div>
							
						</div>
						
						<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
							<span class="laptop-products-text pull-left">Laptops</span><br><hr style="background:#4d94ff;height:1px;">
							<?php 
							$query1=laptops_all_query();
							$rows1=mysqli_num_rows($query1);
							if($rows1>0)
							{
								while($row=mysqli_fetch_assoc($query1))  
								{

							?>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 productdiv">
								<div class="product-box" style="height:305px;">
									<img src="images/<?php echo $row['main_image'];?>" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
									<a href="product_details.php?id=<?php echo $row['id'];?>"><span style="cursor: pointer;"><?php echo $row['header']?> </span></a><br><br>
									<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
									<span class="pull-left text-style"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
								</div>
							</div>
							<?php }}?>
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
