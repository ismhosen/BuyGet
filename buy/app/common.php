<?php
function myLink()
{
	echo "
		
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<link rel='stylesheet' href='bootstrap/bootstrap.min.css'>		
		<link rel='stylesheet' href='font-awesome/css/font-awesome.min.css'>
		<script type='text/javascript' src='jquery/jquery.min.js'></script>
		<script type='text/javascript' src='bootstrap/bootstrap.js'></script>
	";
}
function demoheader(){
	echo "
<!DOCTYPE html>
<html lang='en'>	
	<head>
		
			<link rel='stylesheet' type='text/css' href='commoncss.css'>
		
	</head>
	<body>
		<header>
			<nav class='navbar navbar-default navbar-fixed-top'>
				<div class='container-fluid'>
					<div class='navbar-header'>
						<a class='navbar-brand' href='#home'>Buy & Get</a>
					</div>
					<a class='signupin navbar-right' href='signup.php'><span class='fa fa-hand-o-right mycolor'></span><font class='mynavbar' color='#4d94ff'>&nbsp;&nbsp;Sign Up</font></a>
					<a class='signupin navbar-right' href='signin.php'><span class='fa fa-user mycolor'></span><font class='mynavbar' color='#4d94ff'>&nbsp;&nbsp;Sign in</font></a>

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
function myheader()
{
	echo '
<!DOCTYPE html>
<html lang="en">	
	<head>
		<style type="text/css">
			
			  
		</style>
		<link rel="stylesheet" type="text/css" href="commoncss.css">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="fa fa-bars""></span>	
						</button>
						<a href="index.php" class="navbar-brand"><img src="images/logo.png" width=70px></a>
					</div>
					
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<a class="signupin navbar-right" href="signup.php"><span class="fa fa-hand-o-right mycolor"></span><font class="mynavbar" color="#4d94ff">&nbsp;&nbsp;Sign Up</font></a>
							<a class="signupin navbar-right" href="signin.php"><span class="fa fa-user mycolor"></span><font class="mynavbar" color="#4d94ff">&nbsp;&nbsp;Sign in</font></a>
						</ul>
						<div class=container>
							<ul class="nav navbar-nav navbar-left">
								<li><a href="#home"><font class="mynavbar" color="#4d94ff">Gift Cards</font></a></li>
								<li><a href="newproducts.php"><font class="mynavbar" color="#4d94ff">New Products</font></a></li>
								<li><a href="discountproducts.php"><font class="mynavbar" color="#4d94ff">Discount PRoducts</font></a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right" id="main-bar">
								<li class="scoll-smooth"><a href="index.php"><font class="mynavbar " color="#4d94ff">Home</font></a></li>
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""><font class="mynavbar " color="#4d94ff">Categories <span class="caret"></span> </font></a>
									<ul class="dropdown-menu">
									<li><a href="mobile.php"><font class="mynavbar" color="#4d94ff">Mobile</font></a></li>
									<li><a href="laptop.php"><font class="mynavbar" color="#4d94ff">Laptop</font></a></li>
									<li><a href="watch.php"><font class="mynavbar" color="#4d94ff">Watch</font></a></li>
									<li><a href=""><font class="mynavbar" color="#4d94ff">cloths</font></a></li>
									</ul>
								</li>
								<li class="scoll-smooth"><a href="index.php"><font class="mynavbar" color="#4d94ff">Help</font></a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</nav>
		</header>
	</body>
</html>	
	';
}

function buyerheader($name,$imgname,$cart,$bookmark)
{
	echo '
	<!DOCTYPE html>
<html lang="en">	
	<head>
		<link rel="stylesheet" type="text/css" href="commoncss.css">
	</head>
	<body>
	<header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="fa fa-bars""></span>	
				</button>
				<a href="homepagebuyer.php" class="navbar-brand"><img src="images/logo.png" width=70px></a>
			</div>
			
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""><font class="mynavbar " color="#4d94ff"><img class="img-circle" src="images/'.$imgname.'" width="21px" height="21px">&nbsp;&nbsp;'.$name.' <span class="caret"></span> </font></a>
						<ul class="dropdown-menu">
						<li><a href="userprofile.php"><font class="mynavbar" color="#4d94ff">My Profile</font></a></li>
						<li><a href="inbox.php"><font class="mynavbar" color="#4d94ff">Inbox</font></a></li>
						<li><a href="index.php"><font class="mynavbar" color="#4d94ff">Sign Out</font></a></li>
						<li><a href=""><font class="mynavbar" color="#4d94ff">Help</font></a></li>
						</ul>
					</li>
				</ul>
				<div class=container>
					<ul class="nav navbar-nav navbar-left">
						<li><a href="#home"><font class="mynavbar" color="#4d94ff">Gift Cards</font></a></li>
						<li><a href="newproducts.php"><font class="mynavbar" color="#4d94ff">New Products</font></a></li>
						<li><a href="discountproducts.php"><font class="mynavbar" color="#4d94ff">Discount PRoducts</font></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right" id="main-bar">
						<li class="scoll-smooth"><a href="homepagebuyer.php"><font class="mynavbar " color="#4d94ff">Home</font></a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""><font class="mynavbar " color="#4d94ff">Categories <span class="caret"></span> </font></a>
							<ul class="dropdown-menu">
							<li><a href="mobile.php"><font class="mynavbar" color="#4d94ff">Mobile</font></a></li>
							<li><a href="laptop.php"><font class="mynavbar" color="#4d94ff">Laptop</font></a></li>
							<li><a href="watch.php"><font class="mynavbar" color="#4d94ff">Watch</font></a></li>
							<li><a href=""><font class="mynavbar" color="#4d94ff">cloths</font></a></li>
							</ul>
						</li>
						<li class="scoll-smooth"><a href=""  data-toggle="modal" data-target="#myModal"><font class="mynavbar" size="4" color="#4d94ff"><span class="fa fa-cart-plus">&nbsp;<sup>'.$cart.'</sup></span></font></a></li>
						<li class="scoll-smooth"><a href=""  data-toggle="modal" data-target="#bookmarkModal"><font class="mynavbar" size="4" color="#4d94ff"><span class="fa fa-bookmark-o">&nbsp;<sup>'.$bookmark.'</sup></span></font></a></li>
					</ul>
				</div>
				
			</div>
		</div>
	</nav>
</header>
	</body>
</html>		
	';
}
function sellerheader($name,$imgname)
{
	echo '
	<!DOCTYPE html>
<html lang="en">	
	<head>
		<link rel="stylesheet" type="text/css" href="commoncss.css">
	</head>
	<body>
	<header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="fa fa-bars""></span>	
				</button>
				<a href="homepageseller.php" class="navbar-brand"><img src="images/logo.png" width=70px></a>
			</div>
			
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""><font class="mynavbar " color="#4d94ff"><img class="img-circle" src="images/'.$imgname.'" width="21px" height="21px">&nbsp;&nbsp;'.$name.' <span class="caret"></span> </font></a>
						<ul class="dropdown-menu">
						<li><a href="userprofile.php"><font class="mynavbar" color="#4d94ff">My Profile</font></a></li>
						<li><a href="inbox.php"><font class="mynavbar" color="#4d94ff">Inbox</font></a></li>
						<li><a href="signout.php"><font class="mynavbar" color="#4d94ff">Sign Out</font></a></li>
						<li><a href=""><font class="mynavbar" color="#4d94ff">Help</font></a></li>
						</ul>
					</li>
				</ul>
				<div class=container>
					<ul class="nav navbar-nav navbar-right" id="main-bar">
						<li class="scoll-smooth"><a href="homepageseller.php"><font class="mynavbar " color="#4d94ff">Home</font></a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""><font class="mynavbar " color="#4d94ff">Categories <span class="caret"></span> </font></a>
							<ul class="dropdown-menu">
								<li><a href="mobile.php"><font class="mynavbar" color="#4d94ff">Mobile</font></a></li>
								<li><a href="laptop.php"><font class="mynavbar" color="#4d94ff">Laptop</font></a></li>
								<li><a href="watch.php"><font class="mynavbar" color="#4d94ff">Watch</font></a></li>
								<li><a href=""><font class="mynavbar" color="#4d94ff">cloths</font></a></li>
								<li><a href="newproducts.php"><font class="mynavbar" color="#4d94ff">New Products</font></a></li>
								<li><a href="discountproducts.php"><font class="mynavbar" color="#4d94ff">Discount PRoducts</font></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
				
			</div>
		</div>
	</nav>
</header>
	</body>
</html>		
	';
}
function adminheader()
{
	echo '
	<!DOCTYPE html>
<html lang="en">	
	<head>
		<link rel="stylesheet" type="text/css" href="commoncss.css">
	</head>
	<body>
	<header>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="fa fa-bars""></span>	
				</button>
				<a href="homepageadmin.php" class="navbar-brand"><img src="images/logo.png" width=70px></a>
			</div>
			
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""><font class="mynavbar " color="#4d94ff"><img class="img-circle" width="21px" height="21px">&nbsp;&nbsp;ADMIN <span class="caret"></span> </font></a>
						<ul class="dropdown-menu">
						<li><a href="userprofile.php"><font class="mynavbar" color="#4d94ff">My Profile</font></a></li>
						<li><a href="index.php"><font class="mynavbar" color="#4d94ff">Sign Out</font></a></li>
						<li><a href=""><font class="mynavbar" color="#4d94ff">Help</font></a></li>
						</ul>
					</li>
				</ul>
				<div class=container>
					<ul class="nav navbar-nav navbar-right" id="main-bar">
						<li class="scoll-smooth"><a href="homepageseller.php"><font class="mynavbar " color="#4d94ff">Home</font></a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""><font class="mynavbar " color="#4d94ff">Categories <span class="caret"></span> </font></a>
							<ul class="dropdown-menu">
								<li><a href="mobile.php"><font class="mynavbar" color="#4d94ff">Mobile</font></a></li>
								<li><a href="laptop.php"><font class="mynavbar" color="#4d94ff">Laptop</font></a></li>
								<li><a href="watch.php"><font class="mynavbar" color="#4d94ff">Watch</font></a></li>
								<li><a href=""><font class="mynavbar" color="#4d94ff">cloths</font></a></li>
								<li><a href="newproducts.php"><font class="mynavbar" color="#4d94ff">New Products</font></a></li>
								<li><a href="discountproducts.php"><font class="mynavbar" color="#4d94ff">Discount PRoducts</font></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
				
			</div>
		</div>
	</nav>
</header>
	</body>
</html>		
	';
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
			.mysearchbox
			{
				margin-top:70px;
				width: 500px;
				height: 30px;
				border: .1px solid #fff;
				border-radius: 2px;
				-webkit-box-shadow: 0 0 10px rgba(0, 0, 204, .3);
				box-shadow: 0 0 10px rgba(0, 0, 204, .3);
				background-image: url("images/search.png");
				background-position: 471px 7px; 
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
			@media screen and (max-width: 550px) and (min-width: 462px) {
				
				#searchBox {
					width:400px;
				}
				.mysearchbox
				{
					background-image: url("images/search.png");
				background-position: 370px 7px; 
  				background-repeat: no-repeat;
				}
			  }
			  @media screen and (max-width: 461px) and (min-width: 332px) {
				
				#searchBox {
					width:300px;
				}
				.mysearchbox
				{
					background-image: url("images/search.png");
				background-position: 270px 7px; 
  				background-repeat: no-repeat;
				}
			  }
			  @media screen and (max-width: 332px) and (min-width: 100px) {
				
				#searchBox {
					width:200px;
				}
				.mysearchbox
				{
					background-image: url("images/search.png");
				background-position: 170px 7px; 
  				background-repeat: no-repeat;
				}
			  }
			
		</style>
	</head>
	<body>
		<search>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12  text-center mysearchboxx pull-eft">
						<div class="search-container">
							<form action="search.php" method="GET" class="">
								<span class="myseacrh"><input id="searchBox" onkeyup="searchByAjax(this.value)" type="text" class="mysearchbox"  placeholder="&nbsp;Search here ..." name="searchBox" ></span>
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



function mymodal()
{
	echo '
	
	<!<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>Bootstrap Example</title>
		<style>
			#mymodal
			{
				display: none;
			}
			.modal
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
			.modal-content
			{
				position: relative;
				background-color: #fefefe;
				margin: auto;
				padding: 0;
				border: 1px solid #888;
				width: 50%;
				box-shadow: 0 4px 3px 0 rgba(0,0,0),0 6px 4px 0 rgba(0,0,0,0);
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
				color: #000;
				text-decoration: none;
				cursor: pointer;
			}
			.modal-header
			{
				padding: 2px 16px;
				background-color: #1abc9c;
				color: white;
			}
			.modal-body
			{
				padding: 2px 16px;
			}
			.modal-footer
			{
				padding: 2px 16px;
				background-color: #1abc9c;
				color: white;
			}
		</style>
	</head>
	<body>
		<button id="myBtn">open Modal</button>
		
		
		<script>
			let modal=document.getElementById("mymodal");
			var btn=document.getElementById("myBtn");
			var close=document.getElementsByClassName("close")[0];
			btn.onclick=function()
			{
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

	</body>
	</html>


	';
}


function myFooter()
{
	echo '
	
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">		
		<style type="text/css">
			
			.footer 
			{
				position:relative;
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

	function submitfeedback()
	{
		include '../data/user_feedback.php';
		$name=$_POST['name'];
		$email=$_POST['email'];
		$comment=$_POST['comment'];
		if(isset($_POST['feedbacksubmit']))
		{
			feedback($name,$email,$comment);
		}

	}
}
?>