 <?php
include '../service/product_services.php';
$name=$_GET['name'];
$p_id=$_GET['p_id'];
$u_id=$_GET['u_id'];
$email=$_GET['email'];
$quantity=$_GET['quantity'];
$address=$_GET['address'];
$phone=$_GET['phone'];
$voucher=$_GET['voucher'];
$comment=$_GET['comment'];
$price=$_GET['price'];
$owner_id=$_GET['owner_id'];

echo order($p_id,$owner_id,$u_id,$price,$quantity,$name,$address,$phone,$email,$comment);
// echo "<script>document.location='index.php';</script>";
