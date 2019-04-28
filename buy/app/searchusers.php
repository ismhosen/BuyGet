<?php
session_start();
include 'common.php';
include '../service/user_service.php';
include '../data/search_data_access.php';
$email=$_SESSION['user']['email'];
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="admincss.css">
	</head>
	<body>
    
        <table class="table table-responsive">
        <br>
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
                <th>User validity</th>
                <th>Block/UnBlock</th>
            </thead>
            <span class="search-products-text pull-left">Search Products</span><br><br>
            <tbody>
                <?php
                $query1=owner_search_users_Query();
                $rows1=mysqli_num_rows($query1);
                if($rows1>0)
                {
                    while($row=mysqli_fetch_assoc($query1))  
                    {
                ?>
                <tr>
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
                    <td><?php echo $row['validity']?></td>
                    <td><button class="btn btn-success fa fa-check btn-xs"></button>&nbsp;&nbsp;&nbsp;<button class="btn btn-danger fa fa-ban btn-xs"></button></td>
                </tr>
                <?php }}
                else
                {
                    echo "<td class='error'>No result found</td>";
                }
                ?>
            </tbody>
        </table><hr style="border:1px solid #1c67d8">
	</body>
</html>

