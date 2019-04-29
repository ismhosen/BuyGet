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
// echo "<script>alert('$id')</script>";
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
	buyerheader($name,$imgname);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<style>
			body
			{
				margin-top: 52px;
				padding: 0%;
			}
			.left-bar
			{
				
				padding: 0%;
				background:#4d94ff;
				height: 700px;
			}
			
			.dashboard-header
			{
				margin-top: 70px;
				margin: 0%;
				padding: 10px;
				background: #1c67d8;
				color: #fff;
			}
			.mynavbar
			{
				/* margin-top: 2%; */
			}
			.mynavbar ul
			{
				
				list-style-type: none;
				margin: 0;
				padding: 0;
				cursor: pointer;
			}
			.mynavbar li:first-child
			{
				/* border-top: 1px solid #1c67d8; */
			}
			.mynavbar li:first-child:hover
			{
				border-top: 1px solid #4d94ff;
			}
			.mynavbar li a 
			{
				
				color: #fff;
				display: block;
				padding: 5px 10px;
				text-decoration: none;
				border-bottom: 1px solid #1c67d8;
			}
			.active
            {
				border-top: 3px solid #4d94ff;
                background: #1c67d8;
            }
			.mynavbar li a:hover
			{
				background: #1c67d8;
				transition: all 0.3s ease-in-out;
				border-top: 2px solid #1c67d8;
				border-bottom: none;
			}
			table tbody tr:hover
			{
				transition: all .3s ease-in-out;
				background:#fff;
			}
			.products-container
			{
				background: #1c67d8;
				height: 40px;
				padding: 1px;
			}
			.products-container h4
			{
				padding: 1px 10px;
			}
			.mysearchbox
			{
				border: .1px solid #fff;
				border-radius: 2px;
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 204, .3);
				box-shadow: 0 0 10px rgba(0, 0, 204, .3);
				background-image: url("images/search.png");
				background-position: 158px 3px; 
  				background-repeat: no-repeat;
			}
		
			.mysearchbox:hover
			{
				transition: all .3s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 204, .5);
    			box-shadow: 0 0 10px rgba(0, 0, 204, .5);
			}
			.mysearchbox:focus
			{
				transition: all .3s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(255, 255, 255, .7);
    			box-shadow: 0 0 10px rgba(255, 255, 255, .7);
			}
			.myseacrh
			{
				padding: 7px 10px;
			}
			.myiconbutton-plus
			{
				border: none;
				color: #fff;
				background: #32ac0d;
				border-radius:2px;
				padding: 5px 10px;
				margin: 0px 15px 0px 5px;
			}
			.myiconbutton-delete
			{
				border: none;
				color: #fff;
				background: #ad0808;
				border-radius:3px;
				padding: 5px 10px;
				margin: 0px 10px 0px 5px;
			}
			.myiconbutton-delete:hover, .myiconbutton-plus:hover
			{
				transition: all .3s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 204, .5);
    			box-shadow: 0 0 10px rgba(255,255,255, .5);
			}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 left-bar">
				<h4 class="dashboard-header">Dashboard</h4>
				<div class="mynavbar">
					<ul>
						<li><a class="active" href="homepageseller.php">My Products</a></li>
						<li><a href="addproducts.php">Add Products</a></li>
						<li><a href="recentorders.php">Recent Orders</a></li>
						<li><a>Contact List</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 right-bar">
					
					<div class="products-container">
						<h4 class="" style="color:#fff;float: left;">Product Table</h4>
						
						<div class="myseacrh">
							<span class=""><input id="searchBox" onkeyup="ownersProducts(this.value)" type="text" class="mysearchbox pull-right"  placeholder="&nbsp;Search here ..." name="searchBox" ></span>
							<a href="addproducts.php"><button type="button" class="pull-right myiconbutton-plus"><span class="fa fa-plus"></span></button></a>
							<a><button type="button" class="pull-right myiconbutton-delete"><span class="fa fa-trash"></span></button></a>
						</div>			
					</div>
					<span id="demo"></span>
					<table class="table table-responsive">
						
						<thead>
							<th width="150px"><input type="checkbox" name="select_all">&nbsp;&nbsp;Select All</th>
							<th width="300px">Product Model</th>
							<th width="200px">Product Image</th>
							<th width="200px">Price</th>
							<th width="200px">Quantity</th>
							<th>Status</th>
							<th>Action</th>
						</thead>
						
						<tbody >
							
							<?php
							$query1=owner_id($id);
							$rows1=mysqli_num_rows($query1);
							if($rows1>0)
							{
								while($row=mysqli_fetch_assoc($query1))  
								{
								
							?>
							<tr>
								<td><input type="checkbox" name="select_all"></td>
								<td><?= $row['model']?></td>
								<td><img src="images/<?= $row['main_image']?>" width="80px;"></td>
								<td>Regular: <?= $row['regular_price']?></br>Special: <?= $row['special_price']?></br>Discount: <?= $row['discount_price']?></td>
								<td><?= $row['quantity']?></td>
								<td><?= $row['status']?></td>
								<td>
									<a href="editproducts.php?header=<?php echo $row['header']?>&id=<?php echo $row['id']?>"><button type="submit" class="btn btn-success" name=""><span class="fa fa-edit"></span></button></a>
									
								</td>	
								</tr>
							<?php }}?>
						</tbody>
					</table>
					
				</div>
		</div>
		
		
	</body>
</html>
<?php
myFooter();
submitfeedback();
?>

<script>
	function ownersProducts(str)
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
			xhttp.open("GET","searchownerproducts.php?str="+str,true);
			xhttp.send();
		}
	}
</script>

