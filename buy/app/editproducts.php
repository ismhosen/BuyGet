<?php
session_start();
include 'common.php';
include '../service/user_service.php';
include '../data/products_data_access.php';
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];
$id=$_GET['id'];
// get_users($email);
//  echo "<script>alert('$id')</script>";
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
			.mynavbar li a:hover
			{
				background: #1c67d8;
				transition: all 0.3s ease-in-out;
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
				background-position: 123px 3px; 
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
				padding:7px 10px;
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
            table tbody tr td
			{
				padding: 10px;
				border:.1px solid rgba(77,148,255,.3);
			}
			table tbody tr:hover
			{
				transition: all .3s ease-in-out;
				background:#fff;
			}
            .productseditbox
            {
                border:none;
                width:100%;
                
            }
            table input[type="text"],[type="number"]
            {
                font-size:15px;
                padding: 7px 15px;
            }
            textarea
            {
                overflow-y: scroll;
				resize: none;
                height: 10%;
                padding: 7px 15px;
            }
            #mymodal
			{
				display: none;
			}
			.modall
			{
				position: fixed;
				z-index: 1;
				padding-top: 100px;
				left:0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgba(0,0,0,0.4);
			}
			.modal-contentt
			{
				position: relative;
				margin: auto;
				padding: 0;
				width: 50%;
				box-shadow: 0 4px 3px 0 rgba(0, 0, 204, .3),0 6px 4px 0 rgba(0, 0, 204, .3);
				-webkit-animation-name:animatetop;
				-webkit-animation-duration:.4s;
				animation-name:animatetop;
				animation-duration:.5s;
			}
			@-webkit-keyframes animatetop
			{
				from {top:-300px;opacity: 0}
				to {top:0;opacity: 1}
			}
			@keyframes animatetop
			{
				from {top:-300px;opacity: 0}
				to {top:0;opacity: 1}
			}
			.close
			{
				color: white;
				float: right;
				font-size: 28px;
				font-weight: bold;
			}
			.close:hover, .close:focus
			{
				color: #fff;
				text-decoration: none;
				cursor: pointer;
			}
			.modal-header
			{
				padding: 2px 16px;
				background-color: #1c67d8;
				color: white;
			}
			.modal-body
			{
				padding: 2px 16px;
			}
			
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 left-bar">
				<h4 class="dashboard-header">Dashboard</h4>
				<div class="mynavbar">
					<ul>
						<li><a href="homepageseller.php">My Products</a></li>
						<li><a>Recent Orders</a></li>
						<li><a>Contact List</a></li>
					</ul>
				</div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-8 right-bar">
                <div class="products-container">
                    <h4 class="" style="color:#fff;float: left;"><span class="fa fa-edit">&nbsp;&nbsp;Edit Your Product</span></h4>
                    
                    <div class="myseacrh">
                        <span class=""><input id="searchBox" onkeyup="ownersProducts(this.value)" type="text" class="mysearchbox pull-right"  placeholder="&nbsp;Search here ..." name="searchBox" ></span>
                        <a href="addproducts.php"><button type="button" class="pull-right myiconbutton-plus"><span class="fa fa-plus"></span></button></a>
                        <!-- <a><button type="button" class="pull-right myiconbutton-delete"><span class="fa fa-trash"></span></button>/<a> -->
                    </div>			
                </div>
                
            </div>
            <form method="POST" action="updateproducts.php?id=<?php echo $id?>" id="myform">
                <div class="col-lg-6 col-md-5 col-sm-5 col-xs-6 right-bar">
                    <span id="demo"></span>
                    <table class="table table-responsive">
                        
                        <tbody>
                            <?php
                            // var_dump($id);
                                $query1=products_id($id);
                                $rows1=mysqli_num_rows($query1);
                                if($rows1>0)
                                {
                                    while($row=mysqli_fetch_assoc($query1))  
                                    {
                            ?>
                            <tr>
                                <td width=300px>Image</td>
                                <td width=900px><img src="images/<?php echo $row['main_image'];?>" width="200px"><input type="file" name="imgname" class="productseditbox" value="sdfsd"></td>
                            </tr>
                            <tr>
                                <td width=300px>Brand</td>
                                <td width=900px><input type="text" name="brand" class="productseditbox" value="<?php echo $row['brand'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Model</td>
                                <td width=900px><input type="text" name="model" class="productseditbox" value="<?php echo $row['model'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Header</td>
                                <td width=900px><textarea name="header" class="productseditbox"><?php echo $row['header'];?></textarea></td>
                            </tr>
                            <tr>
                                <td width=300px>Processor</td>
                                <td width=900px><input type="text" name="processor" class="productseditbox" value="<?php echo $row['processor'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Generation</td>
                                <td width=900px><input type="text" name="gen" class="productseditbox" value="<?php echo $row['generation'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Clock speed</td>
                                <td width=900px><input type="text" name="clock_speed" class="productseditbox" value="<?php echo $row['clock_speed'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Cache</td>
                                <td width=900px><input type="text" name="cache" class="productseditbox" value="<?php echo $row['cache'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Dispaly type</td>
                                <td width=900px><input type="text" name="d_type" class="productseditbox" value="<?php echo $row['display_type'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Display size</td>
                                <td width=900px><input type="text" name="d_size" class="productseditbox" value="<?php echo $row['display_size'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Display Resolution</td>
                                <td width=900px><input type="text" name="d_res" class="productseditbox" value="<?php echo $row['display_resolution'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Touch</td>
                                <td width=900px><input type="text" name="touch" class="productseditbox" value="<?php echo $row['touch'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>RAM type</td>
                                <td width=900px><input type="text" name="r_type" class="productseditbox" value="<?php echo $row['ram_type'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>RAM</td>
                                <td width=900px><input type="text" name="ram" class="productseditbox" value="<?php echo $row['ram'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Storage</td>
                                <td width=900px><input type="text" name="storage" class="productseditbox" value="<?php echo $row['storage'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Graphics chipset</td>
                                <td width=900px><input type="text" name="g_chipset" class="productseditbox" value="<?php echo $row['graphics_chipset'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Graphics memory</td>
                                <td width=900px><input type="text" name="g_memory" class="productseditbox" value="<?php echo $row['graphics_memory'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Networking</td>
                                <td width=900px><input type="text" name="networking" class="productseditbox" value="<?php echo $row['networking'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Display port</td>
                                <td width=900px><input type="text" name="d_port" class="productseditbox" value="<?php echo $row['display_port'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Audio port</td>
                                <td width=900px><input type="text" name="a_port" class="productseditbox" value="<?php echo $row['audio_port'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>USB Port</td>
                                <td width=900px><input type="text" name="u_port" class="productseditbox" value="<?php echo $row['usb_port'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Battery</td>
                                <td width=900px><input type="text" name="battery" class="productseditbox" value="<?php echo $row['battery'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Weight</td>
                                <td width=900px><input type="text" name="weight" class="productseditbox" value="<?php echo $row['weight'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Color</td>
                                <td width=900px><input type="text" name="color" class="productseditbox" value="<?php echo $row['color'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Operating System</td>
                                <td width=900px><input type="text" name="os" class="productseditbox" value="<?php echo $row['operating_system'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Others</td>
                                <td width=900px><input type="text" name="others" class="productseditbox" value="<?php echo $row['others'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Part No</td>
                                <td width=900px><input type="text" name="part_no" class="productseditbox" value="<?php echo $row['part_no'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Country of Origin</td>
                                <td width=900px><input type="text" name="origin" class="productseditbox" value="<?php echo $row['origin'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Made in Assemble</td>
                                <td width=900px><input type="text" name="assemble" class="productseditbox" value="<?php echo $row['assemble'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Warranty</td>
                                <td width=900px><input type="text" name="warranty" class="productseditbox" value="<?php echo $row['warranty'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Upcoming</td>
                                <td width=900px><input type="text" name="upcoming" class="productseditbox" value="<?php echo $row['upcoming'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Gifts</td>
                                <td width=900px><input type="text" name="gifts" class="productseditbox" value="<?php echo $row['gifts'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Regular Price</td>
                                <td width=900px><input type="text" name="r_price" class="productseditbox" value="<?php echo $row['regular_price'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Special Price</td>
                                <td width=900px><input type="text" name="s_price" class="productseditbox" value="<?php echo $row['special_price'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Discount Price</td>
                                <td width=900px><input type="text" name="d_price" class="productseditbox" value="<?php echo $row['discount_price'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Quantity</td>
                                <td width=900px><input type="number" name="quantity" class="productseditbox" value="<?php echo $row['quantity'];?>"></td>
                            </tr>
                            <tr>
                                <td width=300px>Status</td>
                                <td width=900px><input type="text" name="status" class="productseditbox" value="<?php echo $row['status'];?>"></td>
                            </tr>
                            <!-- <tr>
                                <td width=300px>RAM type</td>
                                <td width=900px>DDR4 2400MHz</td>
                            </tr> -->
                            <?php }}?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-3 col-xs-2 right-bar">
                    <button type="submit" class="btn btn-success" name="update"><span class="fa fa-update"></span>Update Product</button>
                    <button type="button" class="btn btn-danger" id="myBtn" onclick='myfunction()'><span class="fa fa-trash">&nbsp;Delete Products</span></button>
                    <button type="submit" class="btn btn-primary" name="duplicate"><span class="fa fa-duplicate"></span>&nbsp;Duplicate Product</button>
                </div>
            </form>
		</div>
		<div id="mymodal" class="modall">
            <div class="modal-contentt">
                <div class="modal-header text-center">
                    <Span class="close">&times;</Span>
                    <h4>Are sure want to delte this?</h4><hr>
                    <form method="POST" action="updateproducts.php?id=<?php echo $id?>">
                        <button type="submit" class="btn btn-success" name="ok"><span class="fa fa-check"></span>&nbsp Ok</button>
                        <button type="submit" class="btn btn-danger" name="cancel"><span class="fa fa-remove"></span>&nbsp Cancel</button>
                    </form>
                </div>
            </div>
        </div>
		
	</body>
</html>
<?php
myFooter();
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
    let modal=document.getElementById("mymodal");
    var btn=document.getElementById("myBtn");
    var close=document.getElementsByClassName("close")[0];
    
    function myfunction()
    { 
        // document.getElementById("myform").addEventListener("submit", function(event){
        //     event.preventDefault();
        // });
        modal.style.display="block";
    }
    close.onclick=function()
    {
        modal.style.display="none";
    }
    window.onclick=function(e)
    {
        console.log(e);
        if(e.target==modal)
            {
                modal.style.display="none";
            }
    }
</script>

