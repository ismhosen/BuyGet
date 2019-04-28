<?php
echo "<title>Laptop</title>";
include 'common.php';
include '../data/products_data_access.php';
include '../service/user_service.php';
// include '../data/cart_data_access.php';
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


if($_GET['error']=="cart_bookmark_error")
{
	echo "<script>alert('Already Added')</script>";
	echo "<script>document.location='laptop.php';</script>";
}

mySearch();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="commoncss.css">
	</head>
	<body>
		<div class="products">
			<div class="laptop-products">
				<div class="container">
					<br>
					<div class="row">
						<div class="col-lg-3 col-md-2 col-sm-4 col-xs-12">
							<div class="search">
								<span class="laptop-products-text pull-left" style="font-weight:bold">Filter By</span><br><hr style="background:#4d94ff;height:2px;margin-top:13px">
								<div class="brand">
									<a href="#brand-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Brand</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="brand-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="checkbox" id="asus" name="brand" value="Asus" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Asus</span><hr>
											<input type="checkbox" id="accer" name="brand" value="Accer" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Accer</span><hr>
											<input type="checkbox" id="dell" name="brand" value="Dell" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Dell</span><hr>
											<input type="checkbox" id="hp" name="brand" value="HP" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;HP</span><hr>
											<input type="checkbox" id="lenovo" name="brand" value="Lenovo" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Lenevo</span><hr>
											<input type="checkbox" id="microsoft" name="brand" value="Microsoft" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Microsoft</span><hr>
											<input type="checkbox" id="macbook" name="brand" value="Macbook" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Macbook</span><hr>
											<input type="checkbox" id="razer" name="brand" value="Razer" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Razer</span><hr>
											<input type="checkbox" id="ilife" name="brand" value="ilife" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;I-Life</span><hr>
										</form>
									</div>
								</div>
								<div class="processor">
									<a href="#processor-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Processor</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="processor-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="checkbox" name="processor" id="i3" value="i3" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Core i3</span><hr>
											<input type="checkbox" name="processor" id="i5" value="i5" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Core i5</span><hr>
											<input type="checkbox" name="processor" id="i7" value="i7" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Core i7</span><hr>
											<input type="checkbox" name="processor" id="i9" value="i9" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Core i9</span><hr>
											<input type="checkbox" name="processor" id="ryzen3" value="ryzen3" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;AMD Ryzen 3</span><hr>
											<input type="checkbox" name="processor" id="ryzen5" value="ryzen5" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;AMD Ryzen 5</span><hr>
											<input type="checkbox" name="processor" id="ryzen7" value="ryzen7" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;AMD Ryzen 7</span><hr>
											<input type="checkbox" name="processor" id="i3" value="Pentium" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Intel Pentium</span><hr>
										</form>
									</div>
								</div>
								<div class="generation">
									<a href="#generation-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Generation</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="generation-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="checkbox" name="generation" id="5th" value="5th" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;5th</span><hr>
											<input type="checkbox" name="generation" id="6th" value="6th" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;6th</span><hr>
											<input type="checkbox" name="generation" id="7th" value="7th" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;7th</span><hr>
											<input type="checkbox" name="generation" id="8th" value="8th" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;8th</span><hr>
										</form>
									</div>
								</div>
								<div class="screen-size">
									<a href="#screen-size-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Screen-size</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="screen-size-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="checkbox" name="screensize" id="10to10.6" value="10" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;10 to 10.6 inch</span><hr>
											<input type="checkbox" name="screensize" id="10to10.6" value="11" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;11 to 11.6 inch</span><hr>
											<input type="checkbox" name="screensize" id="11to11.6" value="12" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;12 to 12.6 inch</span><hr>
											<input type="checkbox" name="screensize" id="12to12.6" value="13" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;13 inch</span><hr>
											<input type="checkbox" name="screensize" id="13" value="14" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;14 inch</span><hr>
											<input type="checkbox" name="screensize" id="14to14.6" value="15" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;15 to 15.6 inch</span><hr>
											<input type="checkbox" name="screensize" id="15to15.6" value="17" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;17 to 17.6 inch</span><hr>
											<input type="checkbox" name="screensize" id="17to17.6" value="1314" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;13 to 14 inch</span><hr>
										</form>
									</div>
								</div>
								<div class="resolution">
									<a href="#resolution-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Resolution</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="resolution-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="checkbox" name="resolution" id="HD" value="HD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;HD</span><hr>
											<input type="checkbox" name="resolution" id="FHD" value="FHD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Full HD</span><hr>
											<input type="checkbox" name="resolution" id="2k" value="2k" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;2k</span><hr>
											<input type="checkbox" name="resolution" id="QHD" value="QHD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;QHD</span><hr>
											<input type="checkbox" name="resolution" id="4k" value="4k" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;4k</span><hr>
										</form>
									</div>
								</div>
								<div class="ram">
									<a href="#ram-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Ram</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="ram-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="checkbox" name="ram" id="2GB" value="2GB" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;2GB</span><hr>
											<input type="checkbox" name="ram" id="4GB" value="4GB" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;4GB</span><hr>
											<input type="checkbox" name="ram" id="6GB" value="6GB" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;6GB</span><hr>
											<input type="checkbox" name="ram" id="8GB" value="8GB" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;8GB</span><hr>
											<input type="checkbox" name="ram" id="16GB" value="16GB" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;16GB</span><hr>
										</form>
									</div>
								</div>
								<div class="storage">
									<a href="#storage-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Storage</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="storage-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="checkbox" name="storage" id="16GB" value="64GB eMMC" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;64GB eMMC</span><hr>
											<input type="checkbox" name="storage" id="16GB" value="500GB HDD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;500GB HDD</span><hr>
											<input type="checkbox" name="storage" id="16GB" value="1TB HDD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;1TB HDD</span><hr>
											<input type="checkbox" name="storage" id="16GB" value="2TB HDD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;2TB HDD</span><hr>
											<input type="checkbox" name="storage" id="16GB" value="128GB SSD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;128GB SSD</span><hr>
											<input type="checkbox" name="storage" id="16GB" value="128GB SATA SSD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;128GB SATA SSD</span><hr>
											<input type="checkbox" name="storage" id="16GB" value="256GB SSD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;256GB SSD</span><hr>
											<input type="checkbox" name="storage" id="16GB" value="256GB SATA SSD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;256GB SATA SSD</span><hr>
											<input type="checkbox" name="storage" id="16GB" value="512GB SSD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;512GB SSD</span><hr>
											<input type="checkbox" name="storage" id="512GB" value="512GB SATA SSD" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;512GB SATA SSD</span><hr>
										</form>
									</div>
								</div>
								<div class="graphics-memory">
									<a href="#graphics-memory-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Graphics Memory</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="graphics-memory-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="checkbox" name="gpu" id="2GB" value="2GB" onclick="brandsearchbyajax()" ><span>&nbsp;&nbsp;2GB</span><hr>
											<input type="checkbox" name="gpu" id="4GB" value="4GB" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;4GB</span><hr>
											<input type="checkbox" name="gpu" id="6GB" value="6GB" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;6GB</span><hr>
											<input type="checkbox" name="gpu" id="8GB" value="8GB" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;8GB</span><hr>
											<input type="checkbox" name="gpu" id="Shared" value="Shared" onclick="brandsearchbyajax()"><span>&nbsp;&nbsp;Shared</span><hr>
										</form>
									</div>
								</div>
								<div class="price">
									<a href="#price-collapse" class="" data-toggle="collapse"><span style="font-size:15px;" class="">Price</span><span  style="font-size:15px;" class="pull-right fa fa-plus "> </span> </a><hr class="title-hr">
									<div id="price-collapse" class="collapse collapse-style" style="">
										<form>
											<input type="text" id="min" name="min" size="6" placeholder="min"><span>&nbsp;&nbsp;-&nbsp;&nbsp;</span>
											<input type="text" id="max" name="min" size="6" placeholder="max">&nbsp;&nbsp;tk&nbsp;&nbsp;
											<button type="button" class="btn btn-success" onclick="brandsearchbyajax()">GO</button><hr>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div  class="col-lg-2 col-md-4 col-sm-6 col-xs-12" id="searchdiv"></div>
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
							<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 productdiv" style="height:335px;">
								<div class="product-box">
									<img src="images/<?php echo $row['main_image'];?>" class="img-responsive" title="ASUS ZenBook 15 Ultra-Slim Compact Laptop 15.6” FHD 4-Way Narrow Bezel, Intel Core i7-8565U">
									<a href="product_details.php?id=<?php echo $row['id'];?>&header=<?php echo $row['header'];?>"><span style="cursor: pointer;"><?php echo $row['header']?> </span></a><br><br>
									<span class="pull-left text-style"><span style="color:#4d94ff; font-weight:bold;">৳</span>&nbsp;&nbsp;<span>100000</span>/-</span>
									<!-- <span class="pull-left text-style" onclick="cartadd()"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span> -->
									<?php
									if($email==""){
									?>
									<br><br>
									<button type="submit" class="btn btn-default pull-left fa fa-cart-plus btn-sm pull-left" name="add_to_cart_index" onclick="signin()"></button>
									<button type="submit" class="btn btn-default pull-left fa fa-bookmark-o btn-sm" name="bookmark_index" onclick="signin()"></button>
									<?php }
									else {
									?>
									<form method="POST" action="carthandler.php?id=<?=$id?>&p_id=<?=$row['id']?>">		
										<br><br>
										<button type="submit" class="btn btn-default pull-left fa fa-cart-plus btn-sm pull-left" name="add_to_cart_laptop"></button>
										<button type="submit" class="btn btn-default pull-left fa fa-bookmark-o btn-sm" name="bookmark_laptop"></button>
									</form>
									<?php }?>
								</div>
							</div>
							<?php }}?>
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
										<td><button type="submit" name="save_laptop" class="btn btn-success fa fa-check"></button></td>
										<td><button type="submit" name="delete_laptop" class="btn btn-danger fa fa-trash"></button></td>
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
							<button type="submit" class="btn btn-danger pull-left fa fa-trash" name="delete_all_laptop">&nbsp; Clear ALL</button>
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
										<td><button type="submit" name="delete_bookmark_laptop" class="btn btn-danger fa fa-trash"></button></td>
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
						<form method="POST" action="carthandler.php?id=<?=$id?>" style="margin:0px; padding:0px; display:inline;">		
							<button type="submit" class="btn btn-danger pull-left fa fa-trash" name="delete_bookmark_all_laptop">&nbsp; Clear ALL</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script>
		function brandsearchbyajax()
		{
			// console.log(brand);
			let divid=document.getElementById("searchdiv");
	
			let brands =[];
			let brand = document.getElementsByName("brand");
			brand.forEach(element => {
				brands.push({
					'brand': element.value,
					'value': element.checked
				})

			});
			let processors =[];
			let processor = document.getElementsByName("processor");
			processor.forEach(element => {
				processors.push({
					'processor': element.value,
					'value': element.checked
				})

			});
			let generations =[];
			let generation = document.getElementsByName("generation");
			generation.forEach(element => {
				generations.push({
					'generation': element.value,
					'value': element.checked
				})

			});
			let screensizes =[];
			let screensize = document.getElementsByName("screensize");
			screensize.forEach(element => {
				screensizes.push({
					'screensize': element.value,
					'value': element.checked
				})

			});

			let resolutions =[];
			let resolution = document.getElementsByName("resolution");
			resolution.forEach(element => {
				resolutions.push({
					'resolution': element.value,
					'value': element.checked
				})

			});

			let rams =[];
			let ram = document.getElementsByName("ram");
			ram.forEach(element => {
				rams.push({
					'ram': element.value,
					'value': element.checked
				})

			});

			let storages =[];
			let storage = document.getElementsByName("storage");
			storage.forEach(element => {
				storages.push({
					'storage': element.value,
					'value': element.checked
				})

			});

			let gpus =[];
			let gpu = document.getElementsByName("gpu");
			gpu.forEach(element => {
				gpus.push({
					'gpu': element.value,
					'value': element.checked
				})

			});
	// 		if (typeof gpus == 'undefined' && gpus.length < 0) {
    // // the array is defined and has at least one element
	// 			console.log("hello");
	// 		}
			var minprice=document.getElementById('min').value;
			var maxprice=document.getElementById('max').value;
			//  console.log(processors.length);

			// alert(i3_brand);
			// alert(accer_brand);
			// alert(brands);
			let xhttp=new XMLHttpRequest();
			if(brands == 'undefined' && brands.length < 0 && processors == 'undefined' && processors.length < 0 && generations == 'undefined' && generations.length < 0 && screensizes == 'undefined' && screensizes.length < 0 && resolutions == 'undefined' && resolutions.length < 0 && rams == 'undefined' && rams.length < 0 && storages == 'undefined' && storages.length < 0 && gpus == 'undefined' && gpus.length < 0 && maxprice=="" && minprice=="")
			{
				
				divid.style.display = "none";
			}
			else
			{
				xhttp.onreadystatechange=function()
				{
					
				if(this.readyState==4 && this.status==200)
					{
						divid.style.display = "block";
						divid.innerHTML=this.responseText;
					}
				};
				// xhttp.open("GET","searchByCategory.php?asus_brand="+asus_brand + "&accer_brand="+accer_brand + "&dell_brand="+dell_brand + "&hp_brand="+hp_brand + "&lenovo_brand="+lenovo_brand + "&microsoft_brand="+microsoft_brand + "&macbook_brand="+macbook_brand + "&razer_brand="+razer_brand + "&ilife_brand="+ilife_brand + "&i3_brand="+i3_brand,true);
				xhttp.open("GET","searchByCategory.php?brands="+ JSON.stringify(brands) + "&processors="+ JSON.stringify(processors) + "&generations="+ JSON.stringify(generations) + "&screensizes="+ JSON.stringify(screensizes) + "&resolutions="+ JSON.stringify(resolutions) + "&rams="+ JSON.stringify(rams) + "&storages="+ JSON.stringify(storages) + "&gpus="+ JSON.stringify(gpus) + "&min="+minprice + "&max="+maxprice,true);
				xhttp.send();
			}
		}


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
