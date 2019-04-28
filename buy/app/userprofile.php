<?php
session_start();
include 'common.php';
include '../service/user_service.php';
include '../service/product_services.php';
$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$phone=$_SESSION['user']['phone'];
$dob=$_SESSION['user']['dob'];
$gender=$_SESSION['user']['gender'];
$address=$_SESSION['user']['address'];
$imgname=$_SESSION['user']['imgname'];
$cart_rows=mysqli_num_rows(get_cart($id));
$bookmark_rows=mysqli_num_rows(get_bookmark($id));
// get_users($email);
// echo "<script>alert('$email')</script>";
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
	buyerheader($name,$imgname,$cart_rows,$bookmark_rows);
}
?>
<html>
	<head>
		<style>
            body
            {
                /* margin-top:100px; */
            }
            .user-profile
            {
               
               margin-top:160px;
               margin-bottom:90px;
            }
            table tbody tr td
			{
				padding: 10px;
				/* border:1px solid rgba(77,148,255,.3); */
			}
			table tbody tr:hover
			{
				transition: all .3s ease-in-out;
				background:#fff;
			}
            .user-table button
			{
				/* border:.1px solid rgba(77,148,255,.7); */
				/* background:#fff; */
				/* padding:10px; */
				/* height:40px; */
				/* border-radius:3px; */
			}
			.user-table button:hover
			{
				
			}
            .img-div button
            {
                position: absolute;
                top: 239px;
                right: 13px;
                border: none;
                padding: 5px;
                border-radius:2px; 
            }
            .img-div button:hover
            {
                transition: all 0.3s ease-in-out;
                background: rgba(77,148,255);
                color: #fff;
            }
            .submitBtn
            {
                border: 2px solid rgba(77,148,255,.3);
                padding: 5px;
                border-radius:2px;
            }
            .submitBtn:hover
            {
                transition: all 0.3s ease-in-out;
                background: rgba(77,148,255);
                color: #fff;
            }
		</style>
	</head>
	<body>
		<div class="container user-profile">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img-div">
                    <img src="images/<?php echo $imgname;?>" width="370px">
                    <!-- <button id="edit_image_btn">Edit Imgae</button><br>
                    <form method="POST" action="" style="display:none;" id="formid">
                        <input type="file" name="imgname" id="imgname"><span id="imgErr"></span><br>
                        <input type="submit" name="submit" id="imgSubmitBtn" value="Update" class="submitBtn">
                    </form> -->
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    
                    <table class="user-table">
                        <tbody>
                            <tr>
                                <td width=200px>Name</td>
                                <td width=300px><?php echo $name;?></td>
                            </tr>
                            <tr>
                                <td width=200px>Email</td>
                                <td width=300px><?php echo $email;?></td>
                            </tr>
                            <tr>
                                <td width=200px>Phone</td>
                                <td width=300px><?php echo $phone;?></td>
                            </tr>
                            <tr>
                                <td width=200px>Date of Birth</td>
                                <td width=300px><?php echo $dob;?></td>
                            </tr>
                            <tr>
                                <td width=200px>Gender</td>
                                <td width=300px><?php echo $gender;?></td>
                            </tr>
                            <tr>
                                <td width=200px>Address</td>
                                <td width=300px><?php echo $address;?></td>
                            </tr>
                        </tbody>
                    </table><br>
                    
                    <input  type="button" name="submit" id="imgSubmitBtn" value="Update Profile" class="submitBtn" onclick='editByAjax()'>
                    <input  type="button" name="submit" id="imgSubmitBtn" value="Update Password" class="submitBtn" onclick='editpassByAjax()'>
                    
                </div>
            </div>
            <div id="demo"></div>
        </div>
		<script>
            // let edit_image_btn=document.getElementById('edit_image_btn');
            // let formid=document.getElementById('formid');
            // let imgSubmitBtn=document.getElementById('imgSubmitBtn');
            // let imgErr=document.getElementById('imgErr');
            // edit_image_btn.onclick=function()
            // {
            //     formid.style.display="block";
            //     imgSubmitBtn.onclick=function()
            //     {
            //         formid.style.display="block";
            //         imgErr.innerhtml="block";
            //         alert('hello');
            //     }
            // }
            function editByAjax()
            {
                
                let divid=document.getElementById("demo");
                let xhttp=new XMLHttpRequest();
                xhttp.onreadystatechange=function()
                {
                    console.log(this.readyState);
                    console.log(this.status);
                if(this.readyState==4 && this.status==200)
                    {
                       
                        // console.log("200: ",this.responseText);
                        // console.log(this.responseText);
                        // alert(this.responseText);
                        
                        // divid.style.display = "block";
                        divid.innerHTML=this.responseText;
                    }
                };
                xhttp.open("GET","editprofile.php",true);
                xhttp.send();
            
            }
            function editpassByAjax()
            {
                
                let divid=document.getElementById("demo");
                let xhttp=new XMLHttpRequest();
                xhttp.onreadystatechange=function()
                {
                    console.log(this.readyState);
                    console.log(this.status);
                if(this.readyState==4 && this.status==200)
                    {
                       
                        // console.log("200: ",this.responseText);
                        // console.log(this.responseText);
                        // alert(this.responseText);
                        
                        // divid.style.display = "block";
                        divid.innerHTML=this.responseText;
                    }
                };
                xhttp.open("GET","editpassword.php",true);
                xhttp.send();
            
            }
            
        </script>
		
		
	</body>
</html>
	
<?php
myFooter();
submitfeedback();
?>
