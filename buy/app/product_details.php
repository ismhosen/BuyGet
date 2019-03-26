<?php

include 'common.php';
include '../service/product_services.php';
myLink();
myHeader();
mySearch();
$id=$_GET['id'];
get_title($id);
?>
<html>
	<head>
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				
				</div>
			</div>
		</div>
	</body>
</html>
<?php
myFooter();
?>