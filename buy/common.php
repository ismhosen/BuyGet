<?php
function myLink()
{
	echo "
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' href='bootstrap/bootstrap.min.css'>		
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
		<script type='text/javascript' src='bootstrap/bootstrap.min.js'></script>
	";
}
function myHeader(){
	echo "
	<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='utf-8'>
		
		
		<style type='text/css'>
			body
			{
				background: #e6f0ff;
			}
			.signupin
			{
				padding: 15px 25px;
			}
			.mynavbar:hover
			{
				color: #000099;
				transition: all .5s ease-in-out;
				-webkit-transition: all .5s ease-in-out;
				
			}
			
		</style>
	</head>
	<body>
		<header>
			<nav class='navbar navbar-default navbar-fixed-top'>
				<div class='container-fluid'>
					<div class='navbar-header'>
						<a class='navbar-brand' href='#home'>Buy & Get</a>
					</div>
					<a class='signupin navbar-right' href='#home'><span class='fa fa-user mycolor'></span><font class='mynavbar' color='#4d94ff'>&nbsp;&nbsp;Sign in</font></a>
					<a class='signupin navbar-right' href='#home'><span class='fa fa-hand-o-right mycolor'></span><font class='mynavbar' color='#4d94ff'>&nbsp;&nbsp;Sign Up</font></a>

					<div class='container'>
						<ul class='nav navbar-nav pull-left'>
							<li class='scoll-smooth'><a href='#home'><font class='mynavbar' color='#4d94ff'>Gift Cards</font></a></li>
							<li class='scoll-smooth'><a href='newproducts.php'><font class='mynavbar' color='#4d94ff'>New Products</font></a></li>
							<li class='scoll-smooth'><a href='discountproducts.php'><font class='mynavbar' color='#4d94ff'>Discount Products</font></a></li>
						</ul>
						<ul class='nav navbar-nav pull-right'>
							<li class='scoll-smooth'><a href='index.php'><font class='mynavbar' color='#4d94ff'>Home</font></a></li>

							<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href=''><font class='mynavbar' color='#4d94ff'>Categories <span class='caret'></span> </font></a>
								<ul class='dropdown-menu'>
								  <li><a href='mobile.php'><font class='mynavbar' color='#4d94ff'>Mobile</font></a></li>
								  <li><a href='laptop.php'><font class='mynavbar' color='#4d94ff'>Laptop</font></a></li>
								  <li><a href='watch.php'><font class='mynavbar' color='#4d94ff'>Watch</font></a></li>
								  <li><a href=''><font class='mynavbar' color='#4d94ff'>cloths</font></a></li>
								</ul>
							</li>
							<li class='scoll-smooth'><a href='#home'><font class='mynavbar' color='#4d94ff'>Help</font></a></li>
						</ul>
					</div>
				</div>
			</nav>
			
		</header>
	</body>
</html>
	
	";
}

function mySearch()
{
	echo '
	
	<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">		
		<style type="text/css">
			search
			{
				width:100%;
				position:fixed;
				top:0;
				z-index:1;
				background-color:rgba(0, 0, 128,0.3);
			}
			.mysearchboxx
			{

			}
			.mysearchbox
			{
				margin-top:70px;
				width: 500px;
				height: 30px;
				border: .1px solid #fff;
				border-radius: 2px;
				background-image: url("images/search.png");
				background-position: 470px 7px; 
  				background-repeat: no-repeat;
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 204, .3);
    			box-shadow: 0 0 10px rgba(0, 0, 204, .3);
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
			.mycategories
			{
				width: 200px;
				height: 30px;
				border: none;;
				border-radius: 2px;
			}
			.myprice
			{
				width: 80px;
				height: 30px;
				border: none;;
				border-radius: 2px;
			}
			.mycategories:focus
			{
				transition: all .3s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(255, 255, 255, 1);
    			box-shadow: 0 0 10px rgba(255, 255, 255, 1);
			}.myprice:focus
			{
				transition: all .3s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(255, 255, 255, 1);
    			box-shadow: 0 0 10px rgba(255, 255, 255, 1);
			}
			
		</style>
	</head>
	<body>
		<search>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12  text-center mysearchboxx pull-left">
						<div class="search-container">
							<form action="" method="POST" class="">
								<span class="myseacrh"><input type="text" class="mysearchbox "  placeholder="&nbsp;Search here ..." name="search">
								<select class="mycategories">
								  <option value="Select from here">Select from here</option>
								  <option value="Laptop">Laptop</option>
								  <option value="Mobile">Mobile</option>
								  <option value="Watch">Watch</option>
								</select>
								<span>
									<label style="color:#fff">&nbsp;&nbsp;Price: &nbsp;</label>
									<input type="text" class="myprice" placeholder="&nbsp;min" maxlength="6">&nbsp;&nbsp;<span style="color:#fff">-</span>&nbsp;&nbsp;<input type="text" class="myprice" placeholder="&nbsp;max" maxlength="6">&nbsp;&nbsp;<span style="color:#fff">/-</span>
								</span>
							</form>			
						</div>
					</div>
				</div>
			</div>
		</search>
	</body>
</html>
	
	';
}
//<div class="col-md-12 text-center">
//						<div class="advance-search">
//						  	<a href="#demo" class="btn btn-info" data-toggle="collapse">Advance Search</a>
//							<div id="demo" class="collapse">
//								<div class="container">
//									<br>
//									<div class="categories">
//										<label style="color:#fff">Categories: &nbsp;</label>
//										<select>
//										  <option value="Select from here">Select from here</option>
//										  <option value="Laptop">Laptop</option>
//										  <option value="Mobile">Mobile</option>
//										  <option value="Watch">Watch</option>
//										</select>
//									</div><br>
//									<div class="price">
//										<form>
//											<label style="color:#fff">Price: &nbsp;</label>
//											<input type="text" placeholder="min" size="5" maxlength="6">&nbsp;&nbsp;<span style="color:#fff">-</span>&nbsp;&nbsp;<input type="text" placeholder="max" size="5" maxlength="6">&nbsp;&nbsp;<span style="color:#fff">/-</span>
//										</form>
//									</div>
//								</div>
//							</div>
//						</div>

function myFooter()
{
	echo '
	
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">		
		<style type="text/css">
			.signupin
			{
				padding: 15px 25px;
			}
			.footer 
			{
			  	left: 0;
			  	bottom: 0;
			  	width: 100%;
			  	background: #fff;
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, .25);
    			box-shadow: 0 0 10px rgba(0, 0, 0, .25);
				padding: 25px;
			}
			.myicon{
				padding: 5px 10px;
			}
			.myicon:hover{
				transition: all .3s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(32, 80, 223, .5);
    			box-shadow: 0 0 10px rgba(32, 80, 223, .5);
			}
			.hr-buy-get
			{
				width: 100px;
				height: 1px;
				background: #000099;
			}
			.hr-find-us{
				margin: 0 auto;
				width: 30px;
				height: 1px;
				background: #4d94ff;
			}
			.hr-feedback{
				margin: 0 auto;
				width: 30px;
				height: 1px;
				background: #4d94ff;
/*
				position: absolute;
				left: 40px;
*/
			}.hr-help{
				margin: 0 auto;
				width: 20px;
				height: 1px;
				background: #4d94ff;
/*
				position: absolute;
				left: 22px;
*/
			}
			.mytextbox
			{
				width: 40%;
				border: .1px solid #4d94ff;
				border-radius: 2px;
				opacity: .5;
			}
			.mytextbox:focus
			{
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 204, .3);
    			box-shadow: 0 0 10px rgba(0, 0, 204, .3);
			}
			.footer-contact textarea
			{
				overflow-y: scroll;
				
				resize: none;
			}
			.mybutton
			{
				background-color: white;
				color: #4d94ff;
				border-radius: 2px;
				border: none;
				padding: 10px;
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 204, .25);
    			box-shadow: 0 0 10px rgba(0, 0, 204, .25);
			}
			.mybutton:hover{
				background-color: #4d94ff;
				color: white;
				border-radius: 2px;
				border: none;
				padding: 10px;
				transition: all .5s ease-in-out;
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 204, .5);
    			box-shadow: 0 0 10px rgba(32, 80, 223, .5);
			}
			
		</style>
	</head>
	<body>
		<footer>
			<div class="container footer">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="footer-about text-center">
							<h1>Buy & Get</h1>
							<br>
							<h4>Find us on</h4>
							<hr class="hr-find-us"><br>
							<a href=""><font class="myicon" color="#d44638" size="5px"><span class="fa fa-envelope"></span></font></a>
							<a href=""><font class="myicon" color="#38A1F3" size="5px"><span class="fa fa-twitter-square"></span></font></a>
							<a href=""><font class="myicon" color="#3c5a99" size="5px"><span class="fa fa-facebook-official"></span></font></a>
							<a href=""><font class="myicon" color="#c13584" size="5px"><span class="fa fa-instagram"></span></font></a>
							<a href=""><font class="myicon" color="#0077B5" size="5px"><span class="fa fa-linkedin"></span></font></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="footer-contact text-center">
							<h4>Feedback</h4>
							<hr class="hr-feedback"><br>
							<form method="POST" action="">
								<label style="">Name : &nbsp;&nbsp;</label><br>
								<input type="text" class="mytextbox" placeholder="Enter Your name..." name="name"><br><br>
								<label>Email : &nbsp;&nbsp;</label><br>
								<input type="text" class="mytextbox" placeholder="Enter Your email..." name="email"><br><br>
								<label for="comments">Comment : &nbsp;&nbsp;</label><br>
								<textarea id="comments" class="mytextbox" placeholder="Enter Your feedback..." name="comment"></textarea><br><br>
								<input class="mybutton" type="submit" value="Submit" name="feedbacksubmit">
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="footer-terms text-center">
							<h4 >Help</h4>
							<hr class="hr-help"><br>
							<a href=""><span>How to order</span</a><br>
							<a href=""><span>Warrenty Claim</span</a><br>
							<a href=""><span>Help</span</a><br>
							<a href=""><span>Privacy & Policy</span</a><br>
							<a href=""><span>FAQs</span</a><br><br>
							<a href=""><font color="#0077B5" size="3px"><span class="fa fa-copyright"> Buy & Get | 2019</span></font></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
	
	';
}
?>