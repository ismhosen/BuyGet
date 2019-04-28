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
                <th width="">Model</th>
                <th width="">Image</th>
                <th width="">Owner</th>
                <th width="">Details</th>
                <th width="">Delete</th>
            </thead>
            <span class="search-products-text pull-left">Search Products</span><br><br>
            <tbody>
                <?php
                $query1=admin_search_all_laptops();
                $rows1=mysqli_num_rows($query1);
                if($rows1>0)
                {
                    while($row=mysqli_fetch_assoc($query1))  
                    {
                ?>
                <tr>
                    <td><?php echo $slno +=1?></td>
                    <td><?= $row['model']?></td>
                    <td><img src="images/<?= $row['main_image']?>" width="80px"></td>
                    <td><?= $row['owner_id']?></td>
                    <td><a href="product_details.php?id=<?php echo $row['id'];?>&header=<?php echo $row['header'];?>"><button type="button" name="details" class="btn btn-default fa fa-info-circle"></button></a></td>
                    <td>
                        <form method="POST" action="server.php?id=<?php echo $row['id'];?>">
                            <button type="submit" class="btn btn-danger fa fa-trash" name="delete_laptop"></button>
                        </form>
                    </td>
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

