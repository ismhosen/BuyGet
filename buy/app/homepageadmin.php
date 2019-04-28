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
		<style>
			
		</style>
		<link rel="stylesheet" type="text/css" href="admincss.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 left-bar">
				<h4 class="dashboard-header">Dashboard</h4>
				<div class="mynavbar">
					<ul>
						<li><a class="active" href="admin_users.php">Users</a></li>
						<li><a href="allorders.php">All Orders</a></li>
						<li><a href="alllaptops.php">All Laptops</a></li>
						<li><a href="allfeedback.php">Feedback</a></li>
						<!-- <li><a>Contact List</a></li> -->
					</ul>
				</div>
			</div>
			<div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 right-bar">	
				<div class="products-container">
					<h4 class="" style="color:#fff;float: left;">User Dashboard</h4>
					<div class="myseacrh">
						<span class=""><input id="searchBox" onkeyup="ownersProducts(this.value)" type="text" class="mysearchbox pull-right"  placeholder="&nbsp;Search here ..." name="searchBox" ></span>
						<!-- <a href="addproducts.php"><button type="button" class="pull-right myiconbutton-plus"><span class="fa fa-plus"></span></button></a>
						<a><button type="button" class="pull-right myiconbutton-delete"><span class="fa fa-trash"></span></button></a> -->
					</div>			
				</div>
				<span id="demo"></span>
					<!-- <div class="flex-container"></div> -->
			</div>			
				<div class="box" id="total_users" onclick="">
					Total<br> <span class="count-text"><?=$get_users?></span><br> Users
				</div>
				<div class="box" id="total_buyers" onclick="">
					Total<br> <span class="count-text"><?=$get_buyers?></span><br> Buyers
				</div>
				<div class="box" id="total_sellers" onclick="">
					Total<br> <span class="count-text"><?=$get_sellers?></span><br> Sellers
				</div>
			<div id="users" class="col-lg-10 col-md-9 col-sm-9 col-xs-8 right-bar users">
				<table class="table">
					<h4 class="users-header">All user</h4>
					<thead>
						<th>SL no.</th>
						<th>Image</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Date Of Birth</th>
						<th>Gender</th>
						<th>Address</th>
						<th>Type</th>
						<th>Reg Time</th>
						<!-- <th>User validity</th>
						<th>Block/UnBlock</th> -->
					</thead>
					<tbody>
					<?php 
					$slno=0;
					// echo "<script>alert($id)</script>";
					$query1=get_all_users();
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
								<td><img src="images/<?php echo $row['imgname']?>" width="80px"></td>
								<td><?php echo $row['name']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['phone']?></td>
								<td><?php echo $row['dob']?></td>
								<td><?php echo $row['gender']?></td>
								<td><?php echo $row['address']?></td>
								<td><?php echo $row['type']?></td>
								<td><?php echo $row['date']?></td>
								<!-- <td><?php echo $row['validity']?></td>
								<td><button class="btn btn-success fa fa-check btn-xs"></button>&nbsp;&nbsp;&nbsp;<button class="btn btn-danger fa fa-ban btn-xs"></button></td> -->
							</form>
						</tr>
						<?php }}?>
					</tbody>
				</table>
			</div>
			<div id="buyers" class="col-lg-10 col-md-9 col-sm-9 col-xs-8 right-bar buyers">
					<table class="table">
						<h4 class="users-header">All Buyer</h4>
						<thead>
							<th>SL no.</th>
							<th>Image</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Date Of Birth</th>
							<th>Gender</th>
							<th>Address</th>
							<th>Type</th>
							<th>Reg Time</th>
							<!-- <th>User validity</th>
							<th>Block/UnBlock</th> -->
						</thead>
						<tbody>
						<?php 
						$slno=0;
						// echo "<script>alert($id)</script>";
						$query1=get_all_buyers();
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
									<td><img src="images/<?php echo $row['imgname']?>" width="80px"></td>
									<td><?php echo $row['name']?></td>
									<td><?php echo $row['email']?></td>
									<td><?php echo $row['phone']?></td>
									<td><?php echo $row['dob']?></td>
									<td><?php echo $row['gender']?></td>
									<td><?php echo $row['address']?></td>
									<td><?php echo $row['type']?></td>
									<td><?php echo $row['date']?></td>
									<!-- <td><?php echo $row['validity']?></td>
									<td><button class="btn btn-success fa fa-check btn-xs"></button>&nbsp;&nbsp;&nbsp;<button class="btn btn-danger fa fa-ban btn-xs"></button></td> -->
								</form>
							</tr>
							<?php }}?>
						</tbody>
					</table>
				</div>
				<div id="sellers" class="col-lg-10 col-md-9 col-sm-9 col-xs-8 right-bar sellers">
						<table class="table">
							<h4 class="users-header">All Sellers</h4>
							<thead>
								<th>SL no.</th>
								<th>Image</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Date Of Birth</th>
								<th>Gender</th>
								<th>Address</th>
								<th>Type</th>
								<th>Reg Time</th>
								<!-- <th>User validity</th>
								<th>Block/UnBlock</th> -->
							</thead>
							<tbody>
							<?php 
							$slno=0;
							// echo "<script>alert($id)</script>";
							$query1=get_all_sellers();
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
										<td><img src="images/<?php echo $row['imgname']?>" width="80px"></td>
										<td><?php echo $row['name']?></td>
										<td><?php echo $row['email']?></td>
										<td><?php echo $row['phone']?></td>
										<td><?php echo $row['dob']?></td>
										<td><?php echo $row['gender']?></td>
										<td><?php echo $row['address']?></td>
										<td><?php echo $row['type']?></td>
										<td><?php echo $row['date']?></td>
										<!-- <td><?php echo $row['validity']?></td>
										<td><button class="btn btn-success fa fa-check btn-xs"></button>&nbsp;&nbsp;&nbsp;<button class="btn btn-danger fa fa-ban btn-xs"></button></td> -->
									</form>
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
			xhttp.open("GET","searchusers.php?str="+str,true);
			xhttp.send();
		}
	}

	
		// alert('hell');
		var total_users=document.getElementById('total_users');
		var total_buyers=document.getElementById('total_buyers');
		var total_sellers=document.getElementById('total_sellers');

		var users=document.getElementById('users');
		var buyers=document.getElementById('buyers');
		var sellers=document.getElementById('sellers');

		total_users.onclick=function()
		{
			// alert('hell');
			users.style.display="block";
			buyers.style.display="none";
			sellers.style.display="none";
			total_users.style.backgroundColor="#1c67d8";
			total_buyers.style.backgroundColor="#4d94ff";
			total_sellers.style.backgroundColor="#4d94ff";
		};
		total_buyers.onclick=function()
		{
			users.style.display="none";
			buyers.style.display="block";
			sellers.style.display="none";
			total_users.style.backgroundColor="#4d94ff";
			total_buyers.style.backgroundColor="#1c67d8";
			total_sellers.style.backgroundColor="#4d94ff";
		};
		total_sellers.onclick=function()
		{
			users.style.display="none";
			buyers.style.display="none";
			sellers.style.display="block";
			total_users.style.backgroundColor="#4d94ff";
			total_buyers.style.backgroundColor="#4d94ff";
			total_sellers.style.backgroundColor="#1c67d8";
		};


	
</script>

