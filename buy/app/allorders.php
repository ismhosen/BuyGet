<?php
session_start();
include 'common.php';
include '../service/user_service.php';
include '../data/products_data_access.php';
include '../data/users_data_access.php';
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];
// get_users($email);
// echo "<script>alert('$email')</script>";
echo "<title>Buy & Get</title>";
myLink();
if($_SESSION['type']=="seller")
{
	sellerheader($name,$imgname);
}
else if($_SESSION['type']=="buyer")
{
	buyerheader($name,$imgname);
}
else if($_SESSION['type']=="admin")
{
	adminheader();
}
else
{
    echo "<script>document.location='index.php';</script>";
}
$get_users=mysqli_num_rows(get_users());
$get_buyers=mysqli_num_rows(get_buyers());
$get_sellers=mysqli_num_rows(get_sellers());
?>
<!DOCTYPE html>
<html>
	<head>
		
			<link rel="stylesheet" type="text/css" href="admincss.css">
		
	</head>
	<body>
		<div class="container-fluid">
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 left-bar">
				<h4 class="dashboard-header">Dashboard</h4>
				<div class="mynavbar">
					<ul>
						<li><a href="homepageadmin.php">Users</a></li>
                        <li><a class="active" href="allorders.php">All Orders</a></li>
                        <li><a href="alllaptops.php">All Laptops</a></li>
						<li><a href="allfeedback.php">Feedback</a></li>
						<!-- <li><a>Contact List</a></li> -->
					</ul>
				</div>
			</div>
			<div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 right-bar">	
				<div class="products-container">
					<h4 class="" style="color:#fff;float: left;">User Orders Dashboard</h4>
					<div class="myseacrh">
						<span class=""><input id="searchBox" onkeyup="ownersProducts(this.value)" type="text" class="mysearchbox pull-right"  placeholder="&nbsp;Search here ..." name="searchBox" ></span>
						<!-- <a href="addproducts.php"><button type="button" class="pull-right myiconbutton-plus"><span class="fa fa-plus"></span></button></a>
						<a><button type="button" class="pull-right myiconbutton-delete"><span class="fa fa-trash"></span></button></a> -->
					</div>			
				</div>
				<span id="demo"></span>
					<!-- <div class="flex-container"></div> -->
			</div>			
				
			
			<div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 right-bar">
            <table class="table table-responsive">
						
						<thead>
                            <!-- <th width="150px"><input type="checkbox" name="select_all">&nbsp;&nbsp;Select All</th> -->
                            <th>SL no.</th>
							<th width="300px">Product Model</th>
							<th width="200px">Product Image</th>
							<th width="200px">Price</th>
							<th width="200px">Quantity</th>
                            <th width="200px">Customer Name</th>
                            <th width="200px">Customer Email</th>
                            <th width="200px">Customer Mobile</th>
                            <th width="200px">Customer Address</th>
                            <th width="200px">Customer Comment</th>
						</thead>
						
						<tbody >
							
                            <?php
                            $slno=0;
							$query1=owner_order();
							$rows1=mysqli_num_rows($query1);
							if($rows1>0)
							{
								while($row=mysqli_fetch_assoc($query1))  
								{
								
							?>
							<tr>
                                <!-- <td><input type="checkbox" name="select_all"></td> -->
                                <td><?php echo $slno +=1?></td>
								<td><?= $row['model']?></td>
								<td><img src="images/<?= $row['main_image']?>" width="80px;"></td>
								<td> <?= $row['price']?></td>
								<td><?= $row['quantity']?></td>
								<td><?= $row['name']?></td>
								<td><?= $row['email']?></td>
								<td><?= $row['mobile']?></td>
								<td><?= $row['address']?></td>
								<td><?= $row['comment']?></td>
								
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
			xhttp.open("GET","admin_search_all_orders.php?str="+str,true);
			xhttp.send();
		}
	}

	
		// alert('hell');
		

	
</script>

