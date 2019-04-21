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
echo "<title>Buy & Get</title>";
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
	buyerheader($name,$imgname);
}
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
								<span class="pull-left text-style" onclick="cartadd()"><a href=""><span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</span></a></span>
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
								<th>Delete</th>
							</thead>
							<tbody>
							<?php 
							$slno=0;
							// echo "<script>alert($id)</script>";
							$query1=get_cart($id);
							$rows1=mysqli_num_rows($query1);
							if($rows1>0)
							{
								while($row=mysqli_fetch_assoc($query1))  
								{		
									$p_id=$row['c_id'];	
							?>
								<tr>
									<td><?php echo $slno +=1?></td>
									<td><img src="images/<?php echo $row['main_image']?>" width="70px;"></td>
									<td id="price"><?php echo $row['special_price']*$row['quantity']?></td>
									<td><input type="number" class="input-sm" value="<?php echo $row['quantity']?>" onchange="quantityupdate(this.value)" min=></td>
									<form method="POST" action="carthandler.php?c_id=<?php echo $p_id;?>">
										<td><button type="submit" name="delete" class="btn btn-danger fa fa-trash"></button></td>
										<!-- <td><button type="submit" name="save" class="btn btn-success fa fa-check"></button></td> -->
									</form>
								</tr>
								
								<?php }}?>
							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-danger pull-left fa fa-trash">&nbsp; Clear ALL</button>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>
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
	function quantityupdate(str)
	{
		let tdid=document.getElementById("demo");
		let xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange=function()
		{
			
		if(this.readyState==4 && this.status==200)
			{
				tdid.innerHTML *=str;
			}
		
		};
		xhttp.open("GET","carthandler.php?str="+str,true);
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

