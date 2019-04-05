<?php
session_start();
include 'common.php';
include '../service/user_service.php';
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$phone=$_SESSION['user']['phone'];
$dob=$_SESSION['user']['dob'];
$gender=$_SESSION['user']['gender'];
$address=$_SESSION['user']['address'];
$imgname=$_SESSION['user']['imgname'];
// get_users($email);
// echo "<script>alert('$email')</script>";
echo "<title>Buy & Get</title>";
if($email=="")
{
	header('location: index.php');
}
myLink();
userheader($name,$imgname);
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
				border:1px solid rgba(77,148,255,.3);
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
                    <form method="POST" action="" id="formid">
                        <input type="submit" name="submit" id="imgSubmitBtn" value="Update Profile" class="submitBtn" onclick="">
                    </form>
                </div>
            </div>
        </div>
		<script>
            let edit_image_btn=document.getElementById('edit_image_btn');
            let formid=document.getElementById('formid');
            let imgSubmitBtn=document.getElementById('imgSubmitBtn');
            let imgErr=document.getElementById('imgErr');
            edit_image_btn.onclick=function()
            {
                formid.style.display="block";
                imgSubmitBtn.onclick=function()
                {
                    formid.style.display="block";
                    imgErr.innerhtml="block";
                    alert('hello');
                }
            }
            
        </script>
		
		
	</body>
</html>
	
<?php
myFooter();
?>
